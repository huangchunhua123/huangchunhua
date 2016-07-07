<?php
header("Content-Type:text/html;charset=utf-8");
include '../public/DBconn.php';
?>
<link rel="stylesheet" type="text/css" href="../css/index.css"/>
<form method="post" action="updateuser.php">
    <?php
    $sql='select * from userinfo;';
    $query=mysql_query($sql);
    while($row=mysql_fetch_array($query)) {
    ?>
    <div class="div">
        <span>用户名：<?=$row['username']?></span><br />
        <span>密码：<?=$row['userpassword']?></span><br />
        <span>邮箱：<?=$row['emila']?></span><br />
        <span>手机号：<?=$row['phonenumber']?></span><br />
    </div>
    <?php
    }
    ?>
</form>
