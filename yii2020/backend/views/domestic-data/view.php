<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 国内各省市数据 view层 界面
 */


use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DomesticDataModel */

$this->title = $model->provinceName;
$this->params['breadcrumbs'][] = ['label' => '数据管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="domestic-data-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->provinceName], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->provinceName], [
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
            'provinceName',
            'province_confirmedCount',
            'province_suspectedCount',
            'province_curedCount',
            'province_deadCount',
            'updataTime',
        ],
    ]) ?>

</div>
