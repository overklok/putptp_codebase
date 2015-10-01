<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\modules\user\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-default-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'options' => ['enctype' => 'multipart/form-data']]); ?>

                <?= $form->field($model, 'user_name') ?>

                <?= $form->field($model, 'user_first_name') ?>

                <?= $form->field($model, 'user_middle_name') ?>

                <?= $form->field($model, 'user_last_name') ?>

                <?= $form->field($model, 'user_password')->passwordInput() ?>

                <?= $form->field($model, 'user_email') ?>

                <?= $form->field($model, 'user_DOB')->widget(yii\jui\DatePicker::classname(), [
                    'language' => 'ru',
                    'dateFormat' => 'MM/dd/yyyy',
                ]) ?>

                <?= $form->field($model, 'user_image')->fileInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>