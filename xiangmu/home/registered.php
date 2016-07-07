<?php
header("Content-Type:text/html;charset=utf-8");
//include '../public/DBconn.php';
if(isset($_POST['submit'])){
        if(strlen($_POST['user'])<5){
            echo '长度不能低于5位';
        }
        if(strlen($_POST['password'])<5&&strlen($_POST['password'])>15){
            echo '密码长度5-15个字符';
        }
            $dbc = mysqli_connect('localhost', 'root', '123456', 'session');
            $user_username = mysqli_real_escape_string($dbc, trim($_POST['user']));
            $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
            if (!empty($user_username) && !empty($user_password)) {
                $password = md5($user_password);
                $query = "insert into sessionz(name,password)value('$user_username','$password')";
                mysqli_query($dbc, $query);
                session_start();
                $_SESSION['name'] = $user_username;
                $home_url = '../index.php';
                header('Location:' . $home_url);
            }
}
?>
<link rel="stylesheet" type="text/css" href="../css/registered.css"/>
<link rel="stylesheet" type="text/css" href="../css/demo.css"/>
<script src="../js/index.js" type="text/javascript"></script>

<script type="text/javascript">

</script>

<form name="form" method="post" action="registered.php">
    <div class="wrap">
        <div class="wrap-all">
            <div class="title">
                <a href="../index.php">
                    <span class="title-vip">唯品会</span>&nbsp;
                    <span class="title-web">一家专门做特卖的网站</span>
                </a>
            </div>
            <div class="main-image">
                <img src="http://b.appsimg.com/2016/04/21/315/1461224800476.jpg">
                <img src="http://b.appsimg.com/2016/04/21/151/1461224810709.jpg">
                <img src="http://b.appsimg.com/2016/04/21/425/1461224812480.jpg">
            </div>
            <div class="main-login">
                <div style="width:40%;height:100%;margin-left:60%;">
                    <div style="margin-left:20%;padding-top:40%;">
                        <input type="text" name="user" value="用户名">
                    </div>
                    <div style="margin-left:20%;padding-top:5%;">
                        <input type="text" name="password" value="密码">
                    </div>
                    <div style="margin-left:20%;padding-top:5%;">
                        <input class="input" type="submit" name="submit" value="注册" />
                    </div>

                </div>
            </div>
            <div style="width:100%;height:50px;text-align:center;color:#A07089;margin-top:40px;">
                <span>Copyright 2008-2015 vip.com，All Rights Reserved ICP证：粤 B2-20080329</span>
            </div>
        </div>
    </div>
</form>