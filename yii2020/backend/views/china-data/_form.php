<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 国内每日数据 view层 表单
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChinaDataModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="china-data-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'currentConfirmedCount')->textInput() ?>

    <?= $form->field($model, 'confirmedCount')->textInput() ?>

    <?= $form->field($model, 'suspectedCount')->textInput() ?>

    <?= $form->field($model, 'curedCount')->textInput() ?>

    <?= $form->field($model, 'deadCount')->textInput() ?>

    <?= $form->field($model, 'seriousCount')->textInput() ?>

    <?= $form->field($model, 'updateTime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
