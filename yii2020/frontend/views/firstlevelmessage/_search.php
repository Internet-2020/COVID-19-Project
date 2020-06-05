<?php
/**
 * Team:Internet-2020;
 * Coding by Lishurui 1811485,20200514
 * This is firstlevelmessage search view of the frontend MessageBox part
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FirstlevelmessageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hlw-firstlevelmessage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'flmID') ?>

    <?= $form->field($model, 'userName') ?>

    <?= $form->field($model, 'flmTime') ?>

    <?= $form->field($model, 'flmContent') ?>

    <?= $form->field($model, 'secNum') ?>

    <?php // echo $form->field($model, 'flmLikeNum') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
