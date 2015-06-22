<div class="wrapper style1">
    <div class="inner">

        <!-- Feature 1 -->
        <section class="container box feature1">
            <div class="row">
                <div class="12u">
                    <header class="first major">
                        <h2>本站教程</h2>
                        <p>本站为大家提供全面的<strong>实战</strong>教程</p>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="4u">
                    <section>
                        <a href="?r=course&root=10" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                        <header class="second icon fa-user">
                            <h3>写一个自己的操作系统</h3>
                            <p>原来一切都是这么简单</p>
                        </header>
                    </section>
                </div>
                <div class="4u">
                    <section>
                        <a href="?r=course&root=20" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                        <header class="second icon fa-cog">
                            <h3>C语言的深处</h3>
                            <p>易学难精</p>
                        </header>
                    </section>
                </div>
                <div class="4u">
                    <section>
                        <a href="?r=course&root=21" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                        <header class="second icon fa-bar-chart-o">
                            <h3>Linux操作系统</h3>
                            <p>一点一滴从菜鸟开始</p>
                        </header>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="12u">
                    <p>理论知识没有实际结合会显得那样的苍白，先就开始动手把理论和实际结合起来。在你完成一个里程碑之后，你可以骄傲的对别人说，hey！瞧！那是我做的！</p>
                </div>
            </div>
        </section>

    </div>
</div>
<div class="wrapper style2">
    <div class="inner">

        <!-- Feature 2 -->
        <section class="container box feature2">
            <div class="row">
                <div class="6u">
                    <section>
                        <header class="major">
                            <h2>关于我们</h2>
                            <p>我们热爱生活、阳光、自由、分享</p>
                        </header>
                        <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
                            Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
                            Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
                            consequat etiam.</p>
                        <footer>
                            <a href="?r=site/about" class="button medium icon fa-arrow-circle-right">更多</a>
                        </footer>
                    </section>
                </div>
                <div class="6u">
                    <section>
                        <header class="major">
                            <h2>加入我们</h2>
                            <p>成为教程发布者，分享你的心路历程</p>
                        </header>
                        <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
                            Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
                            Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
                            consequat etiam.</p>
                        <footer>
                            <a href="?r=site/application" class="button medium alt icon fa-info-circle">更多</a>
                        </footer>
                    </section>
                </div>
            </div>
        </section>

    </div>
</div>
<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="8u">

                    <!-- Article list -->
                    <section class="box article-list">
                        <h2 class="icon fa-file-text-o">近期更新</h2>
                        <?php
//                        print_r($recent);

                        foreach($recent as $val ){
//                            print_r($val['name']);
                        ?>
                            <!-- Excerpt -->
                            <article class="box excerpt">
                                <!--<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>-->
                                <div>
                                    <header>
                                        <span class="date"><?php print_r(date('M d', $val['updated_at'])); ?></span>
                                        <h3><a href="<?php echo 'index.php?r=course/view%2F&id='.$val['id']?>"><?php print_r($val['name']); ?></a></h3>
                                    </header>
                                    <p><?php print_r($val['key_word']); ?></p>
                                </div>
                            </article>
                        <?php
                        }
                        ?>
                    </section>
                </div>
                <div class="4u" >

                    <!-- Spotlight -->
                    <section class="box spotlight">
                        <h2 class="icon fa-file-text-o">主打教程</h2>
                        <article>
                            <a href="?r=course&root=10" class="image featured"><img src="images/pic07.jpg" alt=""></a>
                            <header>
                                <h3>
                                    <?php echo \yii\helpers\Html::a('写一个自己的操作系', '?r=course&root=10', ['class' => ''])?>
                                </h3>
                                <p>不积跬步，无以至千里</p>
                            </header>
                            <p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper mod
                                quisturpis nisi consequat ornare in, hendrerit in lectus semper mod quis eget mi quat etiam
                                lorem. Phasellus quam turpis, feugiat sed et lorem ipsum dolor consequat dolor feugiat sed
                                et tempus consequat etiam.</p>
                            <p>Lorem ipsum dolor quam turpis, feugiat sit amet ornare in, hendrerit in lectus semper
                                mod quisturpis nisi consequat etiam lorem sed amet quam turpis.</p>
                            <footer>
                                <?php /*echo \yii\helpers\Html::a('开始学习', '?r=course&root=10', ['class' => 'button alt icon fa-file-o']) */?>
                            </footer>
                        </article>
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>