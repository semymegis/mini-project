<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\User $model
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Registrasi Akun');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row box field " style="color: #fff; ">
   
     
            <div class="panel-heading">
                <h3 class="tittle"><?= Html::encode($this->title) ?></h3>
            </div>

            <div class="" style="padding: 10px;">

            <?php $form = ActiveForm::begin([
                    'id' => 'registration-form',
                    'enableAjaxValidation' => true,
                    'enableClientValidation' => false,
                ]); ?>

            <table width="100%" cellpadding="0" cellspacing="0" class="  table-borderless" >
                
            <tr > 
            <td valign="middle"  style="vertical-align:middle">Username</td>
            <td valign="middle">:</td>
            <td valign="middle"><?= $form->field($model, 'username')->label(false) ?></td>
            </tr>

            <tr>
            <td valign="middle">Password</td>
            <td valign="middle">:</td>
            <td valign="middle"><?php if ($module->enableGeneratingPassword == false): ?>
                    <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
                <?php endif ?>
                    
                </td>
            </tr>

            <tr>
            <td>Email</td>
            <td  align="top">:</td>
            <td><?= $form->field($model, 'email')->label(false) ?></td>
            </tr>

            <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?= $form->field($model, 'nama')->label(false) ?></td>
            </tr>

            <tr>
            <td>No. Tlp</td>
            <td>:</td>
            <td><?= $form->field($model, 'tlp')->label(false) ?></td>
            </tr>

            <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $form->field($model, 'gender')->dropDownList(
            ['1' => 'Laki-Laki', '2' => 'Perempuan'])->label(false); ?></td>
            </tr>

            <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $form->field($model, 'alamat')->textarea()->label(false) ?></td>
            </tr>

            
          


            </table>
             <div class="col-md-8" >
            <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1" required="" >
               <label class="checkbox-inline" for="checkboxes-0"> Saya telah membaca dan menerima
                                    <a href="#">
                                     Syarat dan Peraturan
                                    </a>
                                    dari Garena.</label>
            </div>


     
                

                <?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'button-login btn-block','style' => 'margin-bottom:10px;']) ?>

                <?php ActiveForm::end(); ?>
           
           </div>
       
       <!--  <p class="text-center">
            Sudah punya akun? <?= Html::a(Yii::t('user', 'Login disini!'), ['/user/security/login']) ?>
        </p> -->
    
</div>
