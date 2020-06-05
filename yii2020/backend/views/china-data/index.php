<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 国内每日数据 view层 初始化
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ChinaDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '管理数据';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="china-data-model-index">

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

            'id',
            'currentConfirmedCount',
            'confirmedCount',
            'suspectedCount',
            'curedCount',
            //'deadCount',
            //'seriousCount',
            //'updateTime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
