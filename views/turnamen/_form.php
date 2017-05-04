<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Turnamen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="turnamen-form b">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-lg-12 form-horizontal field">

    <div class="form-group">
      <label for="name" class="col-lg-4">Nama Tim :</label>
          <div class="col-lg-8">
           <?= $form->field($model, 'nama_team')->textInput(['maxlength' => true])->label(false) ?>
          </div>
    </div>

    <div class="form-group">
      <label for="name" class="col-lg-4">Nama Lengkap :</label>
          <div class="col-lg-8">
           <?= $form->field($model, 'nama_captain')->textInput(['maxlength' => true])->label(false) ?>
          </div>
    </div>

    <div class="form-group">
      <label for="name" class="col-lg-4">No. Telp :</label>
          <div class="col-lg-8">
           <?= $form->field($model, 'tlp_captain')->textInput(['maxlength' => true])->label(false) ?>
          </div>
    </div>

    

    <div class="form-group">
      <label for="name" class="col-lg-4">Jenis Kelamin :</label>
          <div class="col-lg-8">
           <?php echo $form->field($model, 'gender_captain')->dropDownList(
            ['1' => 'Laki-Laki', '2' => 'Perempuan'])->label(false); ?>
          </div>
    </div>

    <span class="pull-right biasa"><span class="big">C</span>aptain</span>
    <hr>

    <div class="form-group">
      <label for="name" class="col-lg-4">Nama Lengkap :</label>
          <div class="col-lg-8">
           <?= $form->field($model, 'nama_1')->textInput(['maxlength' => true])->label(false) ?>
          </div>
    </div>

    <div class="form-group">
      <label for="name" class="col-lg-4">No. Telp :</label>
          <div class="col-lg-8">
           <?= $form->field($model, 'tlp_1')->textInput(['maxlength' => true])->label(false) ?>
          </div>
    </div>

    

    <div class="form-group">
      <label for="name" class="col-lg-4">Jenis Kelamin :</label>
          <div class="col-lg-8">
           <?php echo $form->field($model, 'gender_1')->dropDownList(
            ['1' => 'Laki-Laki', '2' => 'Perempuan'])->label(false); ?>
          </div>
    </div>

    <span class="pull-right biasa">Anggota<span class="big">1</span></span>
    <hr>

    <div class="form-group">
      <label for="name" class="col-lg-4">Nama Lengkap :</label>
          <div class="col-lg-8">
           <?= $form->field($model, 'nama_2')->textInput(['maxlength' => true])->label(false) ?>
          </div>
    </div>

    <div class="form-group">
      <label for="name" class="col-lg-4">No.Telp :</label>
          <div class="col-lg-8">
           <?= $form->field($model, 'tlp_2')->textInput(['maxlength' => true])->label(false) ?>
          </div>
    </div>



    <div class="form-group">
      <label for="name" class="col-lg-4">Jenis Kelamin :</label>
          <div class="col-lg-8">
          <?php echo $form->field($model, 'gender_2')->dropDownList(
            ['1' => 'Laki-Laki', '2' => 'Perempuan'])->label(false); ?>
          </div>
    </div>

<span class="pull-right biasa">Anggota<span class="big">2</span></span>

    <hr>

    <div class="form-group">
      <label for="name" class="col-lg-4">Nama Lengkap :</label>
          <div class="col-lg-8">
           <?= $form->field($model, 'nama_3')->textInput(['maxlength' => true])->label(false) ?>
          </div>
    </div>

    <div class="form-group">
      <label for="name" class="col-lg-4">No.Telp :</label>
          <div class="col-lg-8">
           <?= $form->field($model, 'tlp_3')->textInput(['maxlength' => true])->label(false) ?>
          </div>
    </div>



    <div class="form-group">
      <label for="name" class="col-lg-4">Jenis Kelamin :</label>
          <div class="col-lg-8">
           <?php echo $form->field($model, 'gender_3')->dropDownList(
            ['1' => 'Laki-Laki', '2' => 'Perempuan'])->label(false); ?>
          </div>
    </div>

<span class="pull-right biasa">Anggota<span class="big">3</span></span>

    <hr>


    

    

   

    

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Register' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    </div>

    <div class="clearfix"></div>

    <?php ActiveForm::end(); ?>

</div>
