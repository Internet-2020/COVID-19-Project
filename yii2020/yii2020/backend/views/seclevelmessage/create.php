<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 二级留言 view层 创建
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SeclevelmessageModel */

$this->title = Yii::t('app', '二级留言更新');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seclevelmessage Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seclevelmessage-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
