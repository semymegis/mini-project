<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Turnamen */

$this->title = $model->team_id;
$this->params['breadcrumbs'][] = ['label' => 'Berhasil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="turnamen-view">

    <h1 class="yellow" align="center">Registrasi Berhasil</h1>


    <div align="center">
    <p class="caption-white">
    Terima kasih telah mendaftar di Turnamen Garena 3 VS 3!
    </p>

    <p class="caption-white">
    Untuk info lebih lanjut, kunjungi Forum Garena Indonesia <a href="#">di sini!</a>.
    </p>

    <p class="caption-white">
    Garena Connecting World Gamers!.
    </p>
    </div>

</div>
