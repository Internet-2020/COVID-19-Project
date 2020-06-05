<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 世界各国数据 view层 表单
 */



use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ForeignCurrentDataModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foreign-current-data-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'continentName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'countryName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_name_english')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_confirmedCount')->textInput() ?>

    <?= $form->field($model, 'country_suspectedCount')->textInput() ?>

    <?= $form->field($model, 'country_curedCount')->textInput() ?>

    <?= $form->field($model, 'country_deadCount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
