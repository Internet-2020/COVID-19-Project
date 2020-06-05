<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 二级留言 view层 查看
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SeclevelmessageModel */

$this->title = $model->flmID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', '二级留言'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="seclevelmessage-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'flmID' => $model->flmID, 'slmID' => $model->slmID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'flmID' => $model->flmID, 'slmID' => $model->slmID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'flmID',
            'slmID',
            'userName',
            'secTime',
            'slmContent:ntext',
        ],
    ]) ?>

</div>
