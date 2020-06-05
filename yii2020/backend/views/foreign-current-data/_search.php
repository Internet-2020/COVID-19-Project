<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 国内每日数据 view层 用于搜索
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ForeignCurrentDataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foreign-current-data-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'continentName') ?>

    <?= $form->field($model, 'countryName') ?>

    <?= $form->field($model, 'country_name_english') ?>

    <?= $form->field($model, 'country_confirmedCount') ?>

    <?= $form->field($model, 'country_suspectedCount') ?>

    <?php // echo $form->field($model, 'country_curedCount') ?>

    <?php // echo $form->field($model, 'country_deadCount') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
