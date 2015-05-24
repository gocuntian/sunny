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
                    <h1><a href="index.html" id="logo">Sunny</a></h1>

                    <!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li class="current_page_item">
                                <?php echo \yii\helpers\Html::a('Home', '?r=site/new', '') ?>
                            </li>
                            <li>
                                <a href="">Dropdown</a>
                                <ul>
                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                    <li><a href="#">Magna phasellus</a></li>
                                    <li>
                                        <a href="">Phasellus consequat</a>
                                        <ul>
                                            <li><a href="#">Lorem ipsum dolor</a></li>
                                            <li><a href="#">Phasellus consequat</a></li>
                                            <li><a href="#">Magna phasellus</a></li>
                                            <li><a href="#">Etiam dolore nisl</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Veroeros feugiat</a></li>
                                </ul>
                            </li>
                            <li>
                                <!--<a href="left-sidebar.html">Left Sidebar</a>-->
                                <?php echo \yii\helpers\Html::a('Left Sidebar', '?r=site/left', '') ?>
                            </li>
                            <li><a href="right-sidebar.html">Right Sidebar</a></li>
                            <li><?php echo \yii\helpers\Html::a('Editor', '?r=site/editor', '') ?></li>
                        </ul>
                    </nav>

                </div>
            </header>

            <!-- Banner -->
            <div id="banner">
                <h2><strong>ZeroFour:</strong> A free responsive site template
                    <br/>
                    built on HTML5 and CSS3 by HTML5 UP</h2>

                <p>Does this statement make you want to click the big shiny button?</p>

                <?php echo \yii\helpers\Html::a('mail', '?r=site/mail', ['class' => 'a']) ?>
                <!-- commit button -->
                <?php echo \yii\helpers\Html::a('登陆', '?r=site/login', ['class' => 'button big icon fa-check-circle']) ?>
            </div>

        </div>
    </div>

    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <?= $content ?>
    </div>

    <!-- Footer Wrapper -->
    <div id="footer-wrapper">
        <footer id="footer" class="container">
            <div class="row">
                <div class="3u">

                    <!-- Links -->
                    <section>
                        <h2>Filler Links</h2>
                        <ul class="divided">
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare in hendrerit </a></li>
                            <li><a href="#">Semper mod quisturpis nisi</a></li>
                            <li><a href="#">Consequat etiam phasellus</a></li>
                            <li><a href="#">Amet turpis, feugiat et</a></li>
                            <li><a href="#">Ornare hendrerit lectus</a></li>
                            <li><a href="#">Semper mod quis et dolore</a></li>
                            <li><a href="#">Amet ornare in hendrerit</a></li>
                            <li><a href="#">Consequat lorem phasellus</a></li>
                            <li><a href="#">Amet turpis, feugiat amet</a></li>
                            <li><a href="#">Semper mod quisturpis</a></li>
                        </ul>
                    </section>

                </div>
                <div class="3u">

                    <!-- Links -->
                    <section>
                        <h2>More Filler</h2>
                        <ul class="divided">
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare in in lectus</a></li>
                            <li><a href="#">Semper mod sed tempus nisi</a></li>
                            <li><a href="#">Consequat etiam phasellus</a></li>
                        </ul>
                    </section>

                    <!-- Links -->
                    <section>
                        <h2>Even More Filler</h2>
                        <ul class="divided">
                            <li><a href="#">Quam turpis feugiat dolor</a></li>
                            <li><a href="#">Amet ornare hendrerit lectus</a></li>
                            <li><a href="#">Semper quisturpis nisi</a></li>
                            <li><a href="#">Consequat lorem phasellus</a></li>
                        </ul>
                    </section>

                </div>
                <div class="6u">

                    <!-- About -->
                    <section>
                        <h2><strong>ZeroFour</strong> by HTML5 UP</h2>

                        <p>Hi! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
                            template by AJ for HTML5 UP.
                            It's Creative Commons Attribution
                            licensed so use it for any personal or commercial project (just credit us
                            for the design!).</p>
                        <a href="#" class="button alt icon fa-arrow-circle-right">Learn More</a>
                    </section>

                    <!-- Contact -->
                    <section>
                        <h2>Get in touch</h2>

                        <div>
                            <div class="row">
                                <div class="6u">
                                    <dl class="contact">
                                        <dt>Twitter</dt>
                                        <dd><a href="#">@untitled-corp</a></dd>
                                        <dt>Facebook</dt>
                                        <dd><a href="#">facebook.com/untitled</a></dd>
                                        <dt>WWW</dt>
                                        <dd><a href="#">untitled.tld</a></dd>
                                        <dt>Email</dt>
                                        <dd><a href="#">user@untitled.tld</a></dd>
                                    </dl>
                                </div>
                                <div class="6u">
                                    <dl class="contact">
                                        <dt>Address</dt>
                                        <dd>
                                            1234 Fictional Rd<br/>
                                            Nashville, TN 00000-0000<br/>
                                            USA
                                        </dd>
                                        <dt>Phone</dt>
                                        <dd>(000) 000-0000</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <div class="row">
                <div class="12u">
                    <div id="copyright">
                        <ul class="menu">
                            <li>&copy; Untitled. All rights reserved</li>
                            <li>Design: HTML5 UP</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    </body>
    </html>
<?php $this->endPage() ?>