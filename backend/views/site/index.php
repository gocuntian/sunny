<?php
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully logged.</p>

        <p><a class="btn btn-lg btn-success" href="">HELLO</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>教程管理(tree)</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p>

                    <?php echo \yii\helpers\Html::a('see more&raquo;', '?r=product', ['class' => 'btn btn-default']) ?>
                    <!--<a class="btn btn-default" href="/tblcoruse/index">see more &raquo;</a></p>-->
                </p>
            </div>
            <div class="col-lg-4">
                <h2>敬请期待</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="">敬请期待 &raquo;</a></p>
               <!--<p><?php /*echo \yii\helpers\Html::a('see more&raquo;', '?r=tblproduct', ['class' => 'btn btn-default']) */?></p>-->
            </div>
            <div class="col-lg-4">
                <h2>敬请期待</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="">敬请期待 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
