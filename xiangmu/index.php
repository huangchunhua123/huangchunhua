<?php
header("Content-Type:text/html;charset=gbk");
include_once './public/DBconn.php';
session_start();
if(isset($_SESSION['name'])){
    $name='<a href="home/date.php">欢迎：'.$_SESSION['name'].'</a>';
    $registered='<a href="home/userlogin.php">退出</a>';
}else{
    $name='<a href="home/userlogin.php">请登录</a>';
    $registered='<a href="home/registered.php">注册</a>';
}
if(isset($_POST['exit'])){
    unset($_SESSION['name']);
}
?>
<link rel="stylesheet" type="text/css" href="./css/index.css" >
<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="./js/index.js" type="text/javascript"></script>
<script src="http://www.yyyweb.com/demo/common/jquery.min.js" type="text/javascript"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function(){
        SyntaxHighlighter.all();
    });
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
    window.onload=function(){

    }
</script>
<style type="text/css">
    #main {
        margin-left: 360px;
        margin-right: 360px;
    }
    #container {
        padding: 60px 40px 0px;
    }
</style>
<form method="post" class="wrap" acton="" name="index">
<!--    <a href="home/registered.php">注册</a>-->
<div class="header-title-wrap">
    <div class="header-title">
        <div class="header-title-address"><a href="#">上海&nbsp;</a></div>
        <div class="header-title-login">
            <div style="width:25%;height:100%;float:left;text-align:right;">
                    <?=$name?>&nbsp;&nbsp;
            </div>
            <div style="float:left;width:74%;height:100%;">
                &nbsp;/&nbsp;<?=$registered?>&nbsp;/&nbsp;&nbsp;
                <a href="#">我的订单&nbsp;/&nbsp;&nbsp;</a>
                <a href="#">我的收藏&nbsp;/&nbsp;&nbsp;</a>
                <a href="#">会员俱乐部&nbsp;/&nbsp;&nbsp;</a>
                <a href="#">客户服务&nbsp;/&nbsp;&nbsp;</a>
                <a href="#">手机版&nbsp;/&nbsp;&nbsp;</a>
                <a href="#">更多</a>
            </div>
        </div>
    </div>
    <div class="header-logo">
        <div class="header-logo-vip">
            <img src="http://b.appsimg.com/2016/04/21/375/1461225710314.png"/>
        </div>
        <div class="header-logo-character">
            <div class="header-logo-character-image">
                <a href="#"><img src="http://b.appsimg.com/2016/04/21/315/1461224800476.jpg"></a>
                <a href="#"><img src="http://b.appsimg.com/2016/04/21/151/1461224810709.jpg"></a>
                <a href="#"><img src="http://b.appsimg.com/2016/04/21/425/1461224812480.jpg"></a>
            </div>
            <div class="header-logo-character-showp">
                <a href="#">我的购物袋</a>
            </div>
        </div>
    </div>
    <div class="header-home">
        <div class="header-home-center">
            <div class="header-home-center-floata"><a href="#">首页</a></div>
            <div class="header-home-center-list"><a href="#">母婴</a></div>
            <div class="header-home-center-list"><a href="#">美妆</a></div>
            <div class="header-home-center-list"><a href="#">居家</a></div>
            <div class="header-home-center-list"><a href="#">男士</a></div>
            <div class="header-home-center-list"><a href="#">唯品国际</a></div>
            <div class="header-home-center-list"><a href="#">唯品金融</a></div>
            <div class="header-home-center-list"><a href="#">旅行</a></div>
            <div class="header-home-center-list"><a href="#">明天上线</a></div>
        </div>
        <a href="#">
            <div class="header-home-center-selling">
                在售分类
            </div>
        </a>
    </div>
    <div class="mainz">
        <div class="main-cycle">
            <div id="main" role="main">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="http://b.appsimg.com/2016/04/22/9971/14613080350225.jpg" />
                        </li>
                        <li>
                            <img src="http://b.appsimg.com/2016/04/26/7173/14616729127710.jpg" />
                        </li>
                    </ul>
                </div>
                </section>
            </div>
        </div>
        <div class="mainz-push">
            <img src="http://a.vpimg2.com/upload/dop/2016/03/17/166/today_DDp.png">
        </div>
        <div class="mainz-lists">
            <div class="mainz-lists-imgleft">
                <a href="#">
                    <div class="mainz-lists-imgleft-imgsize">
                        <img src="http://d.vpimg1.com/upcb/2016/05/03/145/16278610.jpg">
                    </div>
                    <div class="mainz-lists-imgleft-textsize">
                        <span class="mainz-lists-imgleft-textsize-discount">0.7</span>
                        <span class="mainz-lists-imgleft-textsize-color">折起&nbsp;&nbsp;母亲节为妈妈下厨</span>
                    </div>
                </a>
            </div>
            <div class="mainz-lists-imgright">
                <a href="#">
                    <div class="mainz-lists-imgleft-imgsize">
                        <img src="http://d.vpimg1.com/upcb/2016/04/29/134/57514533.jpg">
                    </div>
                    <div class="mainz-lists-imgleft-textsize">
                        <span class="mainz-lists-imgleft-textsize-discount">0.7</span>
                        <span class="mainz-lists-imgleft-textsize-color">折起&nbsp;&nbsp;女装丹宁主题专场</span>
                    </div>
                </a>
            </div>
            <div class="mainz-lists-imgleft">
                <a href="#">
                    <div class="mainz-lists-imgleft-imgsize">
                        <img src="http://c.vpimg1.com/upcb/2016/04/29/30/42424246.jpg">
                    </div>
                    <div class="mainz-lists-imgleft-textsize">
                        <span class="mainz-lists-imgleft-textsize-discount">3</span>
                        <span class="mainz-lists-imgleft-textsize-color">折起&nbsp;&nbsp;Joan&David女装专场</span>
                    </div>
                </a>
            </div>
            <div class="mainz-lists-imgright">
                <a href="#">
                    <div class="mainz-lists-imgleft-imgsize">
                        <img src="http://d.vpimg1.com/upcb/2016/04/29/80/24255190.jpg">
                    </div>
                    <div class="mainz-lists-imgleft-textsize">
                        <span class="mainz-lists-imgleft-textsize-discount">2.7</span>
                        <span class="mainz-lists-imgleft-textsize-color">折起&nbsp;&nbsp;LEE男女装混合专场</span>
                    </div>
                </a>
            </div>
            <div class="mainz-lists-imgleft">
                <a href="#">
                    <div class="mainz-lists-imgleft-imgsize">
                        <img src="http://d.vpimg1.com/upcb/2016/04/29/8/45313727.jpg">
                    </div>
                    <div class="mainz-lists-imgleft-textsize">
                        <span class="mainz-lists-imgleft-textsize-discount">68</span>
                        <span class="mainz-lists-imgleft-textsize-color">元起&nbsp;&nbsp;海澜之家男装专场</span>
                    </div>
                </a>
            </div>
            <div class="mainz-lists-imgright">
                <a href="#">
                    <div class="mainz-lists-imgleft-imgsize">
                        <img src="http://c.vpimg1.com/upcb/2016/04/29/34/13419279.jpg">
                    </div>
                    <div class="mainz-lists-imgleft-textsize">
                        <span class="mainz-lists-imgleft-textsize-discount">唯品价</span>
                        <span class="mainz-lists-imgleft-textsize-color">劲霸&CNCN男装混合专场</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</form>
