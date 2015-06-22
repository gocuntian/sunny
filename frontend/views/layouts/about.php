<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>Sunny Project</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <!--[if lte IE 8]>
        <script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.dropotron.min.js"></script>
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel.css"/>
            <link rel="stylesheet" href="css/styles.css"/>
            <link rel="stylesheet" href="css/style-desktop.css"/>
        </noscript>
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/ie/v8.css"/><![endif]-->
        <!--[if lte IE 9]>
        <link rel="stylesheet" href="css/ie/v9.css"/><![endif]-->
    </head>
    <body class="homepage">

    <!-- Header -->
    <div id="header-wrapper">
        <div class="container">

            <!-- Header -->
            <header id="header">
                <div class="inner">

                    <!-- Logo -->
                    <h1><a href="index.php?r=site" id="logo">Sunny</a></h1>

                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li>
                                <?php echo \yii\helpers\Html::a('首页', '?r=site', '') ?>
                            </li>
                            <li>
                                <a href="">我要学</a>
                                <ul>
                                    <li><a href="#">Linux操作系统</a></li>
                                    <li><a href="#">写一个操作系统</a></li>
                                    <li>
                                        <a href="">C语言的深处</a>
                                        <ul>
                                            <li><a href="#">简介</a></li>
                                            <li><a href="#">框架</a></li>
                                        </ul>
                                </ul>

                            </li>
                            <li><?php echo \yii\helpers\Html::a('申请发布教程', '?r=site/application', '') ?></li>
                            <li><?php echo \yii\helpers\Html::a('关于我们', '?r=site/about', '') ?></li>
                            <li><?php echo \yii\helpers\Html::a('联系我们', '?r=site/contact', '') ?></li>
                            <li><?php echo \yii\helpers\Html::a('赞助我们', '?r=site/help', '') ?></li>
                        </ul>
                    </nav>

                </div>
            </header>
        </div>
    </div>

    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <?= $content ?>
    </div>

    <!-- Footer Wrapper -->
    <!-- Footer Wrapper -->
    <div id="footer-wrapper">
        <footer id="footer" class="container">
            <div class="12u">
                <div id="copyright">
                    <ul class="menu">
                        <li>&copy; Untitled. All rights reserved</li>
                        <li>Design: SUNNY</li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    </body>
    </html>
<?php $this->endPage() ?>