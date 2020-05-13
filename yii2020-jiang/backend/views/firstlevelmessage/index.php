<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 一级留言 view层 初始化
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FirstlevelmessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Firstlevelmessage Models');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="firstlevelmessage-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <p>
        <?= Html::a(Yii::t('app', 'Create Firstlevelmessage Model'), ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'flmID',
            'userName',
            'flmTime',
            'flmContent:ntext',
            'secNum',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
