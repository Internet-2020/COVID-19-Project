<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 创建新闻 view层
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = '创建';
$this->params['breadcrumbs'][] = ['label' => '新闻', 'url' => ['post/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div calss = "row">
    <div class = "row-lg-3"> 
        <div calss = "panel-title box-title">
            <span>注意事项</span>
        </div>
        <div class = "panel-body">
            <p>1.发布文章时请注意遵守国家相关法律规定</p>
            <p>2.发布时请确保文章真实有效，不要发布虚假新闻</p>
            <p>3.发布文章时请注意文明用语</p>
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

            <?=$form->field($model,'summary')->textinput(['maxlength'=>true])?>   

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