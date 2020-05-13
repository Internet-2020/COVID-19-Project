<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 二级留言 view层 更新
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SeclevelmessageModel */

$this->title = Yii::t('app', 'Update Seclevelmessage Model: {name}', [
    'name' => $model->flmID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Seclevelmessage Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->flmID, 'url' => ['view', 'flmID' => $model->flmID, 'slmID' => $model->slmID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="seclevelmessage-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
