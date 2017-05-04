<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="container">
  

        <div class="col-lg-13 col-md-12">
            <div class="row">
                <div class="col-md-7 col-sm-11 col-xs-12 col-md-offset-2 main-wrap">
                    <div class="nav-bar">
                        <a href="/web"><?php echo Html::img('@web/images/navbar.jpg', ['class' => '']) ?></a>
                    </div>

                    <div class="garena-logo">

                    </div>

                    <div class="content-wrap" id="style-1">
                            <?php echo Nav::widget([
                                'options' => ['class' => 'navbar-nav navbar-right'],
                                'items' => [
                                   
                                    // ['label' => 'About', 'url' => ['/site/about']],
                                    // ['label' => 'Contact', 'url' => ['/site/contact']],
                                    Yii::$app->user->isGuest ? (
                                    's'
                                    ) : (
                                        '<li>'
                                        . Html::beginForm(['/site/logout'], 'post')
                                        . Html::submitButton(
                                            '<span class="caption-white">Hi, ' . Yii::$app->user->identity->nama . ' </span>[Keluar] &nbsp;',
                                            ['class' => 'btn btn-link logout']
                                        )
                                        . Html::endForm()
                                        . '</li>'
                                    )
                                ],
                            ]);
                            ?>
                            <div class="col-md-12">
                                
                                    <?= $content ?>
                                
                            </div>
                    </div>

                    


                </div>
            </div>
        </div>


        </div>

    </div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 col-sm-3 col-xs-2 col-md-offset-2">
                    <a href="/web/"><?php echo Html::img('@web/images/garenafooter.png', ['class' => 'logo']) ?></a>
                </div>
                
                <div class="col-md-2 col-sm-3 col-xs-5 col-md-offset-1 col-xs-offset-5 ">

                    <div class="pull-right">
                    <a href="#"><?php echo Html::img('@web/images/fb.jpg', ['class' => 'socmed']) ?></a>
                    <a href="#"><?php echo Html::img('@web/images/twitter.jpg', ['class' => 'socmed']) ?></a>
                    <a href="#"><?php echo Html::img('@web/images/utube.png', ['class' => 'socmed']) ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
