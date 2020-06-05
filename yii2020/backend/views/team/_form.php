<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 团队管理 view层 表单
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeamModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'introduction')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'label_img')->widget('common\widgets\file_upload\FileUpload',[ 'config'=>[]]) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
