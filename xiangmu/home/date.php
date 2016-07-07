<?php
header("Content-Type:text/html;charset=utf8");
include 'jquery.base64.js';
include 'jquery-1.7.1.js';
//实现字符串翻转
//echo strrev($info);

//如何优化数据库
//1.选取适量的字段长度，尽量把字段设置成mot null，如省份，性别最好用enum
//2.使用join来替代子查询
//3.使用union来替代手动创建的临时表
//4.事物处理
//5.锁定表，优化事物处理
//6.使用外键，优化表锁定
//7.建立索引
//8.优化查询语句

//打印出前一天的时间格式
//echo date('Y-m-d H:i:s',strtotime('-1 days'));

//能够使html和php分离的模板
//smarty，dwoo，template lite，XTemplate

//使用那些工具进行版本控制
//cvs，svn，vss,github

//echo,print,print_r有什么区别
//echo是php语句，print和print_r是函数，函数有返回值，print只能打印简单的数据类型如int和string
//print_r能打印出比较复杂的类型如数组和对象，echo也只能输出简单的数据类型

//数据库的事物是什么
//事物是作为一个单元的一组有序的数据库操作，如果所有操作成功则事物成功，提交事物，执行
//操作，如果有一个没有成功则回滚事物，所以操作的的影响都将取消

//session和cookie的区别
//session存储用户访问的全局唯一变量，存储在服务器上，cookie是用来存储连续访问一个页面是
//所使用，是存储在客户端，两者都可以通过时间来设置

//表单中，get与post提交方法的区别
//get是以url参数传递进行接收，而post是实体数据，可以通过form表单提交大量信息

//修改session的生存时间
//$time=24*3600;
//session_set_cookie_params($time);session_start();

//正则过滤js和vbs脚本的函数
//preg_replace()

//include和require的区别是什么？为避免多长包含同一个文件，可用（？）语句代替他们？
//require->require是无条件包含也就是如果一个流程里加入require无论条件成立与否都会先执行require
//include->include有返回值，而require没有，值得注意的是：包含文件不存在或者语法错误的时候
//require是致命的，include不是

//用php写出显示客户端IP与服务器IP的代码
//打印客户端getenv('REMOTE_ADDR'),打印服务器echo gethostbyname('服务器地址')

//优化mysql
//1.每个表都添加一个主键ID，并设置上int类型，设置自动增长
//2.把经常要用到的列加上索引
//3.尽量使用int和tinyint类型，字段尽可能设置成not null
//4.text和varchar是不可避免的，要把text独立出来加上主键关联
//5.select *最好少用，需要什么列数据就写上列名
//6.不要用order by rand()
//7.拆分delect和insert，因为这两个操作会锁住表
//8.mysql语句能简化尽量简化
//9.用join代替子查询

//php防sql注入函数
//mysql_real_escape_string OR mysql_escape_string OR addslashes

//php是什么意思
//php是一种基于服务端来创建动态网站的脚本语言，您可以用php和html生成网站主页

//mysql取得当前时间的函数是？格式化日期的函数是？
//now();date();

//对于大流量的网站，您采用什么样的方法来解决访问量问题
//确认服务器硬件是否足够当前的流量，数据库读写分离，优化数据表，程序功能规则，
//静止外部的倒链，控制大文件的下载，使用不同主机分流主要流量

//有一个网页地址，比如php开发资源网主页：http：//www.phpres.com/index.html如何
//获取内容
//$info=fopen('网站地址'.'rb');
//$con=stream_get_contents($info);
//fclose($con);
//$echo $con;
//OR    echo file_get_contents('http://www.baidu.com/index.php');

//http1.0中，状态码401的含义是？如果返回找不到文件的提示，则可
//用header函数，其语法为？
//状态401代表未授权。header('Location:www.xxx.php');

//在php中heredoc是一种特殊的字符串，它的结束标志必须？
//heredoc的语法是用'<<<'加上自己定义成对的标签，在标签范围内
//的文字市委一个字符串，例子
//$str=<<<SHOW
//my name is huangchunhua!
//SHOW;
echo '<script type="text/javascript">window.onload=function(){alert($.base64.encode(\'1\'));}</script>'
?>
<!--<script type="text/javascript">-->
<!--    window.onload=function(){-->
<!--        alert($.base64.encode('1'));-->
<!--    }-->
<!--</script>-->
