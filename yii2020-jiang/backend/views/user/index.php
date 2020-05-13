<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200511
 *后台 用户 view层 初始化
 */


use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

   <!--  <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 -->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?> 

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id' => [
                'label' => 'ID',
                'attribute' => 'id',
            ],
            'username' => [
                'label' => '用户名',
                'attribute' => 'username',
            ],
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email' => [
                'label' => '邮箱',
                'attribute' => 'email',
            ],
            'status' => [
                'label' => '状态',
                'attribute' => 'status',
                'value' => function($model){
                    return ($model->status == 10)?'激活':'非激活'; 
                },
                'filter' => ['10' => '激活', '9' => '非激活'],
            ],
            // 'created_at' => [
            //     'label' => '创建时间',
            //     'attribute' => 'created_at',
            // ],
            //'updated_at',
            //'verification_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
