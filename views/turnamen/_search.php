<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TurnamenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="turnamen-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'team_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'nama_captain') ?>

    <?= $form->field($model, 'tlp_captain') ?>

    <?= $form->field($model, 'gender_captain') ?>

    <?php // echo $form->field($model, 'nama_1') ?>

    <?php // echo $form->field($model, 'tlp_1') ?>

    <?php // echo $form->field($model, 'gender_1') ?>

    <?php // echo $form->field($model, 'nama_2') ?>

    <?php // echo $form->field($model, 'tlp_2') ?>

    <?php // echo $form->field($model, 'gender_2') ?>

    <?php // echo $form->field($model, 'nama_3') ?>

    <?php // echo $form->field($model, 'tlp_3') ?>

    <?php // echo $form->field($model, 'gender_3') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
