<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 国内每日数据 view层 界面
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ChinaDataModel */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '管理数据', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="china-data-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'currentConfirmedCount',
            'confirmedCount',
            'suspectedCount',
            'curedCount',
            'deadCount',
            'seriousCount',
            'updateTime',
        ],
    ]) ?>

</div>
