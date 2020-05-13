<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 一级留言 view层 查询
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FirstlevelmessageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="firstlevelmessage-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'flmID') ?>

    <?= $form->field($model, 'userName') ?>

    <?= $form->field($model, 'flmTime') ?>

    <?= $form->field($model, 'flmContent') ?>

    <?= $form->field($model, 'secNum') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
