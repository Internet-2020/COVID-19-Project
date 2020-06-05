<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 国内各省市数据 view层 初始化
 */


use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DomesticDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '数据管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="domestic-data-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('添加数据', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'provinceName',
            'province_confirmedCount',
            'province_suspectedCount',
            'province_curedCount',
            'province_deadCount',
            //'updataTime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
