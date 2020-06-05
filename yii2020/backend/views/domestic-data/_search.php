<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 国内各省市数据 view层 用于搜索
 */


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DomesticDataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="domestic-data-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'provinceName') ?>

    <?= $form->field($model, 'province_confirmedCount') ?>

    <?= $form->field($model, 'province_suspectedCount') ?>

    <?= $form->field($model, 'province_curedCount') ?>

    <?= $form->field($model, 'province_deadCount') ?>

    <?php // echo $form->field($model, 'updataTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
