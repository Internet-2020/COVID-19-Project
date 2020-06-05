<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 国内每日数据 view层 用于搜索
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ChinaDataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="china-data-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'currentConfirmedCount') ?>

    <?= $form->field($model, 'confirmedCount') ?>

    <?= $form->field($model, 'suspectedCount') ?>

    <?= $form->field($model, 'curedCount') ?>

    <?php // echo $form->field($model, 'deadCount') ?>

    <?php // echo $form->field($model, 'seriousCount') ?>

    <?php // echo $form->field($model, 'updateTime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
