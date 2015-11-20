<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
        <div class="page-container">  

        <?= $this->render( 'sidebar.php'); ?>

        <div class="page-content">
            <?= $this->render( 'navigation_vertical.php'); ?>
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>                    
                <li class="active"><?= Html::encode($this->title) ?></li>
            </ul>
            <!-- END BREADCRUMB -->     
            <?= $content ?>
        </div>

        </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
