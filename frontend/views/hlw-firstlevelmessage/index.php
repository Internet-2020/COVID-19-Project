<?php
/**
 * Team:Internet-2020;
 * Coding by Lishurui 1811485,20200514
 * This is MessageBox index view of the frontend MessageBox part
 */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HlwFirstlevelmessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\widgets\LinkPager;
use yii\widgets\Breadcrumbs;
use frontend\components\HotmessageWidget;

$this->title="留言列表";
?>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
        <div class="mybreadcrumb">
            <ol class="breadcrumb">
			<li><a href="<?= Yii::$app->homeUrl;?>">首页</a></li>
            <li>留言列表</li>
        </div>
        <h1 class="self-title"><?= Html::encode($this->title) ?></h1>
        <?= ListView::widget([
            'dataProvider'=>$dataProvider,
            'itemView'=>'_listitem',
            'layout'=>'{items}{pager}',
            'pager'=>[
                'maxButtonCount'=> 5,
                'nextPageLabel'=> '下一页',
                'prevPageLabel'=> '上一页',
            ],
        ])?>
        </div>
        <div class="col-md-3">
            <div class="Hotmessagebox">
				<ul class="list-group">
				  <li class="list-group-item">
				  <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 热门留言
				  </li>
				  <li class="list-group-item">
				  <?= HotmessageWidget::widget(['Hotmessage'=>$Hotmessage])?>
				  </li>
				</ul>			
			</div>
        </div>
        <div class="col-md-1">
    </div>
</div>