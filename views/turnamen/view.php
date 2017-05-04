<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Turnamen */

$this->title = $model->team_id;
$this->params['breadcrumbs'][] = ['label' => 'Turnamens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="turnamen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->team_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->team_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'team_id',
            'user_id',
            'nama_captain',
            'tlp_captain',
            'gender_captain',
            'nama_1',
            'tlp_1',
            'gender_1',
            'nama_2',
            'tlp_2',
            'gender_2',
            'nama_3',
            'tlp_3',
            'gender_3',
            'created_date',
        ],
    ]) ?>

</div>
