<?php

/**
 * Team:Internet-2020;
 * Coding by Lishurui 1811485,20200514
 * This is comment form view included in the detail view of the frontend MessageBox part
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\HlwSeclevelmessage;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hlwseclevelmessage-form">

    <?php $form = ActiveForm::begin([
    		'action'=>['hlw-firstlevelmessage/detail','flmID'=>$flmID],
    		'method'=>'post',
    		]); ?>

    
    <div class="row">
    	<div class="col-md-12"><?= $form->field($hlwseclevelmessageModel,'slmContent')->textarea(['row'=>6])?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('发表评论', ['class' =>'btn btn-primary']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>