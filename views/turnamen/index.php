<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TurnamenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Turnamens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="turnamen-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Turnamen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'team_id',
            'user_id',
            'nama_captain',
            'tlp_captain',
            'gender_captain',
            // 'nama_1',
            // 'tlp_1',
            // 'gender_1',
            // 'nama_2',
            // 'tlp_2',
            // 'gender_2',
            // 'nama_3',
            // 'tlp_3',
            // 'gender_3',
            // 'created_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
