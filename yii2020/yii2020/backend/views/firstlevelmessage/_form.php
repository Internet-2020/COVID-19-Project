<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 一级留言 view层 表单
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FirstlevelmessageModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="firstlevelmessage-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'userName')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'flmTime')->textInput() ?> -->

    <?= $form->field($model, 'flmContent')->dropDownList([$model->flmContent, "该留言违反相关规定，不予展示"]) ?>

    <!-- <?= $form->field($model, 'secNum')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
