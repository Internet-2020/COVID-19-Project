<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 国内每日数据 view层 初始化
 */


use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ForeignCurrentDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '数据管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foreign-current-data-model-index">

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

            'continentName',
            'countryName',
            'country_name_english',
            'country_confirmedCount',
            'country_suspectedCount',
            //'country_curedCount',
            //'country_deadCount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
