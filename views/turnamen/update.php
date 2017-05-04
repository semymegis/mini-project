<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Turnamen */

$this->title = 'Update Turnamen: ' . $model->team_id;
$this->params['breadcrumbs'][] = ['label' => 'Turnamens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->team_id, 'url' => ['view', 'id' => $model->team_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="turnamen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
