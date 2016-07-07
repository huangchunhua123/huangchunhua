<?php
//include 'DBconn.php';
if(!isset($_SESSION['id'])){
    if(isset($_POST['submit'])){
        $dbc=new mysqli('localhost','root','123456','session');
        $user_username=mysqli_real_escape_string($dbc,trim($_POST['username']));
        $user_password=mysqli_real_escape_string($dbc,trim($_POST['password']));
        if(!empty($user_username)&&!empty($user_password)){
            $query="select id,name from sessionz where name='$user_username'AND "."password=('$user_password')";
            $data=mysqli_query($dbc,$query);
            if(mysqli_num_rows($data)==1){
                $row=mysqli_fetch_array($data);
                session_start();
                $_SESSION['id']=$row['id'];
                $_SESSION['name']=$row['name'];
                $home_url='index.php';
                header('Location:'.$home_url);
            }
        }
    }else{
        $error_msg='sorry';
    }
}else{
    $error_msg='sorry';
}
?>
<html>
<head>
    <title>Mismatch - Log In</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<h3>Msimatch - Log In</h3>
<!--通过$_SESSION['user_id']进行判断，如果用户未登录，则显示登录表单，让用户输入用户名和密码-->
<?php
if(!isset($_SESSION['id'])){
    ?>
    <!-- $_SERVER['PHP_SELF']代表用户提交表单时，调用自身php文件 -->
    <form method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
            <legend>Log In</legend>

            <label for="username">Username:</label>
            <!-- 如果用户已输过用户名，则回显用户名 -->
            <input type="text" id="username" name="username"
                   value="<?php if(!empty($user_username)) echo $user_username; ?>" />

            <br/>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"/>

        </fieldset>
        <input type="submit" value="Log In" name="submit"/>
    </form>
    <?php
}
?>
</body>
</html>
