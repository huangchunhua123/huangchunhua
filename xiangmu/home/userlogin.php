<?php
header("Content-Type:text/html;charset=utf-8");
//include '../public/DBconn.php';
session_start();
unset($_SESSION['name']);
    $emila='/(\d{5-15}@qq.com)|(\w{2-20}@\w{2,5}.com)/';
    $phone='/(13[4.5.7,8]\d{8})|(15[1,2,5,7,9]\d{8})|(18[1,7,8,9]\d{8})/';
    $userformat='/\w{5,15}/';
    if(isset($_POST['submit'])){
        $userinfo=array($_POST['username']);
        if(preg_grep($emila,$userinfo)){

        }
        if(preg_grep($phone,$userinfo)){

        }
        if(preg_grep($userformat,$userinfo)){

        }
        $dbc=new mysqli('localhost','root','123456','session');
        $user_username=mysqli_real_escape_string($dbc,trim($_POST['username']));
        $user_password=mysqli_real_escape_string($dbc,trim($_POST['password']));
        if(!empty($user_username)&&!empty($user_password)){
            $query="select name from sessionz where name='$user_username'AND "."password=('$user_password')";
            $data=mysqli_query($dbc,$query);
            if(mysqli_num_rows($data)==1){
                $row=mysqli_fetch_array($data);
                $_SESSION['name']=$row['name'];
                if(isset($_POST['radio'])){

                }
                $home_url='../index.php';
                header('Location:'.$home_url);
            }else{
                echo '账号或者密码错误';
            }
        }
    }
?>
<link rel="stylesheet" type="text/css" href="../css/registered.css"/>
<link rel="stylesheet" type="text/css" href="../css/demo.css"/>
<script src="../js/index.js" type="text/javascript"></script>

<script type="text/javascript">

</script>
<style type="text/css">
    body,html{padding:0px;margin: 0px;}
    .float{float: left;margin-left:17%;}
    .float input{width:40px;height:25px;}
</style>
<form name="form" method="post" action="userlogin.php">
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
                        <input type="text" name="username" value="手机号邮箱或者用户名">
                    </div>
                    <div style="margin-left:20%;padding-top:5%;">
                        <input type="text" name="password" value="密码">
                    </div>
                    <div style="margin-left:20%;padding-top:5%;">
                        <input class="input" type="submit" name="submit" value="登录" />
                    </div>
                   <div class="float"><input  name="radio" type="radio"/></div>
                    <div style="float: left;height:25px;padding-top:8px;">保存账号一周</div>
                </div>

            </div>
            <div style="width:100%;height:50px;text-align:center;color:#A07089;margin-top:40px;">
                <span>Copyright 2008-2015 vip.com，All Rights Reserved ICP证：粤 B2-20080329</span>
            </div>
        </div>
    </div>
</form>