<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 国内各省市数据 view层 初始化
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DomesticDataModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="domestic-data-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'provinceName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_confirmedCount')->textInput() ?>

    <?= $form->field($model, 'province_suspectedCount')->textInput() ?>

    <?= $form->field($model, 'province_curedCount')->textInput() ?>

    <?= $form->field($model, 'province_deadCount')->textInput() ?>

    <?= $form->field($model, 'updataTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
