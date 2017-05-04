<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use dektrium\user\widgets\Connect;
use dektrium\user\models\LoginForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'LOGIN');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="row box" style="color: #fff">
   
       
            <div class="panel-heading">
                <h3 class="tittle"><?= Html::encode($this->title) ?></h3>
            </div>
            <div  style="padding: 20px;">
            <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'enableAjaxValidation' => true,
                    'enableClientValidation' => false,
                    'validateOnBlur' => false,
                    'validateOnType' => false,
                    'validateOnChange' => false,
                ]) ?>

            <table width="100%" class="caption-white" >
                <tr>
                <td> Username</td>
                <td> :</td>
                <td> <?php if ($module->debug): ?>
                    <?= $form->field($model, 'login', [
                        'inputOptions' => [
                            'autofocus' => 'autofocus',
                            'class' => 'form-control',
                            'tabindex' => '1']])->dropDownList(LoginForm::loginList()->label(false));
                    ?>

                <?php else: ?>

                    <?= $form->field($model, 'login',
                        ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']]
                    )->label(false);
                    ?>

                <?php endif ?></td>
                <th rowspan="2">
                <?= Html::submitButton(
                    Yii::t('user', 'LOGIN'),
                    ['class' => 'button-login', 'tabindex' => '4']
                ) ?></th>
                </tr>

                <tr>
                <td> Password</td>
                <td> :</td>       
                <td> <?php if ($module->debug): ?>
                    <div class="alert alert-warning">
                        <?= Yii::t('user', 'Password is not necessary because the module is in DEBUG mode.'); ?>
                    </div>
                <?php else: ?>
                    <?= $form->field(
                        $model,
                        'password',
                        ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']])
                        ->passwordInput()
                        ->label(
                            Yii::t('user', '')
                            . ($module->enablePasswordRecovery ?
                                ' ' . Html::a(
                                    Yii::t('user', ''),
                                    ['/user/recovery/request'],
                                    ['tabindex' => '2']
                                )
                                . '' : '')
                        ) ?>
                <?php endif ?></td>

                </tr>
            </table>

           
                

                
               
                

                


                <?php ActiveForm::end(); ?>
            </div>
        
        <?php if ($module->enableConfirmation): ?>
          
        <?php endif ?>
        <?php if ($module->enableRegistration): ?>
            <p class="caption-white" style="padding: 10px;">
                Anda tidak punya akun ? Silahkan daftar  <?= Html::a(Yii::t('user', 'disini.'), ['/user/registration/register']) ?>
            </p>
        <?php endif ?>
        <?= Connect::widget([
            'baseAuthUrl' => ['/user/security/auth'],
        ]) ?>
    
</div>
