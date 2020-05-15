<?php

/**
 * Team:Internet-2020;
 * Coding by Lishurui 1811485,20200514
 * This is Hlwfirstlevelmessage form view included in the create view of the frontend MessageBox part
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\HlwFirstlevelmessage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hlw-firstlevelmessage-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'flmContent')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('发布', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
