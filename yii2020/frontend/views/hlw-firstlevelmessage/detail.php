<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HlwFirstlevelmessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\widgets\LinkPager;
use yii\helpers\HtmlPurifier;
use frontend\models\HlwSeclevelmessage;
use frontend\components\HotmessageWidget;

?>

<div class="container">

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            
            <div class="mybreadcrumb">
            <ol class="breadcrumb">
			<li><a href="<?= Yii::$app->homeUrl;?>">首页</a></li>
            <li><a href="<?= Yii::$app->homeUrl;?>?r=hlw-firstlevelmessage/index">留言列表</a></li>
            <li>留言详情</a></li>
            </ol>
            </div>
            <div class="timeuser">
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                <em><?= Html::encode($model->flmTime)."&nbsp&nbsp&nbsp&nbsp&nbsp";?></em>
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <em><?= Html::encode($model->userName)."&nbsp&nbsp&nbsp&nbsp&nbsp";?></em>
                <p class="firstContent"><?= Html::encode($model->flmContent);?></p>
            </div>
            

            <div class="HlwSeclevelmessage">
                <?php if($model->hlwseclevelmessageCount>=1) :?>
                    <h5><?= $model->hlwseclevelmessageCount.'条评论';?></h5>
                    <?= $this->render('_comment',array(
                        'hlwfirstlevelmessage'=>$model,
                        'hlwseclevelmessages'=>$model->hlwseclevelmessages,
                    ));?>
                <?php endif;?>

                    <h5 class="comment-title">发表评论</h5>
                    <?php
			        echo $this->render('_guestform',array(
					        'flmID'=>$model->flmID,
					        'hlwseclevelmessageModel'=>$hlwseclevelmessageModel, 
			        ));?>

            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>