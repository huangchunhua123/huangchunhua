<?php
header("Content-Type:text/html;charset=utf-8");
$conn = @ mysql_connect("localhost", "root", "123456") or die("数据库链接错误");
mysql_select_db("xiangmu", $conn);
mysql_query("set names 'utf8'");
?>