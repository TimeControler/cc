<?php
session_start();
if(!isset($_SESSION['id'])||!isset($_SESSION['username'])){
    header('Location:login.php');
}
?>
<?php
require '../lib/connect.php';
$manager=$mysqli->query("select * from manager")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../static/layui/css/layui.css">
    <style>
        iframe{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            border: 1px solid #0e84b5;
            box-sizing: border-box;
        }

    </style>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">layui 后台布局</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
<!--        <ul class="layui-nav layui-layout-left">-->
<!--        </ul>-->
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="..<?php echo $manager['head_img'] ?>" class="layui-nav-img">
                    <?php echo $manager['username'] ?>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="return.php">退了</a></li>
        </ul>
    </div>

        <div class="layui-side layui-bg-black">
            <div class="layui-side-scroll">
                <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
                <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">用户管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="managerselect.php" target="content">操作用户</a></dd>
                            <dd><a href="manageradd.php" target="content">添加用户</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">导航管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="navselect.php" target="content">操作导航</a></dd>
                            <dd><a href="navinsert.php" target="content">添加导航</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">产品分类</a>
                        <dl class="layui-nav-child">
                            <dd><a href="productselect.php" target="content">操作分类</a></dd>
                            <dd><a href="productadd.php" target="content">添加分类</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">产品详情</a>
                        <dl class="layui-nav-child">
                            <dd><a href="goodsselect.php" target="content">操作产品</a></dd>
                            <dd><a href="goodsadd.php" target="content">添加产品</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">投诉功能</a>
                        <dl class="layui-nav-child">
                            <dd><a href="teamselect.php" target="content">操作投诉功能</a></dd>
                            <dd><a href="teamadd.php" target="content">添加投诉说明</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">在线预约</a>
                        <dl class="layui-nav-child">
                            <dd><a href="onlineselect.php" target="content">查询预约</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">分店地址</a>
                        <dl class="layui-nav-child">
                            <dd><a href="addressselect.php" target="content">操作地址</a></dd>
                            <dd><a href="addressadd.php" target="content">添加地址</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">轮播图</a>
                        <dl class="layui-nav-child">
                            <dd><a href="bannerselect.php" target="content">操作轮播图</a></dd>
                            <dd><a href="banneradd.php" target="content">添加轮播图</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">新闻资讯</a>
                        <dl class="layui-nav-child">
                            <dd><a href="newsselect.php" target="content">操作新闻</a></dd>
                            <dd><a href="newsadd.php" target="content">添加新闻</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">服务管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="serviceselect.php" target="content">操作服务</a></dd>
                            <dd><a href="serviceadd.php" target="content">添加服务</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a class="" href="javascript:;">关于我们</a>
                        <dl class="layui-nav-child">
                            <dd><a href="aboutus.php" target="content">操作内容</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    <div class="layui-body layui-tab-content">
        <!-- 内容主体区域 -->
        <iframe src="newsadd.php" name="content" frameborder="0"></iframe>
    </div>
    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © ONEPIECE.com - 海贼王周边商城
    </div>
</div>

<script src="../static/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>