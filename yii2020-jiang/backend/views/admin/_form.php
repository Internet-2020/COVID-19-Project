<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 管理员 view层 表单
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'role')->textInput() ?> -->

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'status')->dropDownList(['10' => '激活', '9' => '非激活']) ?> -->

    <!-- <?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- <?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
