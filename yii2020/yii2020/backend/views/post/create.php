<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = '创建';
$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['post/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div calss = "row">
    <div class = "row-lg-3"> 
        <div calss = "panel-title box-title">
            <span>注意事项</span>
        </div>
        <div class = "panel-body">
            <p>1.</p>
            <p>2.</p>
            <p>3.</p>
        </div>
    </div>
    <div calss = "row-lg-9">
        <div calss = "panel-title box-title">
            <span>创建文章</span>
        </div> 
        <div class = "panel-body">
            <?php $form = ActiveForm::begin()?>
            <?=$form->field($model,'title')->textinput(['maxlength'=>true])?>

            <?=$form->field($model,'media')->textinput(['maxlength'=>true])?>

            <?=$form->field($model,'cat_id')->dropDownList($cat)?>

            <?= $form->field($model, 'label_img')->widget('common\widgets\file_upload\FileUpload',[
                'config'=>[
                ]
                ]) ?>

            <?= $form->field($model, 'content')->widget('common\widgets\ueditor\Ueditor',[
                'options'=>[
                    'initialFrameHeight' => 400,
                ]
            ]) ?>

            <?=$form->field($model,'tags')->widget('common\widgets\tags\TagWidget')?>

            <div class = "form-group">
                <?=Html::submitButton("发布",['calss'=>'btn btn-success'])?>
            </div>
            <?php ActiveForm::end()?>
        </div>
    </div>
</div>