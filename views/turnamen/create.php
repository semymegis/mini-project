<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Turnamen */

$this->title = 'Create Turnamen';
$this->params['breadcrumbs'][] = ['label' => 'Turnamens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="turnamen-create caption-white box"  style="height: 400px; padding: 10px; overflow-y: auto; overflow-x: hidden; margin-top: -10px;">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
