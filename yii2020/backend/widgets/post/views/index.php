<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 新闻列表组件 view层 初始化
 */

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="panel">
    <div class="panel-title box-title">
        <span><?=$data['title']?></span>
        <?php if($this->context->more):?>
        <span class="pull-right"><a href="<?=$data['more']?>" class="font-12">刷新»</a></span>
        <?php endif;?>
    </div>
    <div class="new-list">
    <?php foreach ($data['body'] as $list):?>
        <div class="panel-body border-bottom">      
            <div class="row">
                <div class="col-lg-5 label-img-size">
                    <a href="#" class="post-label">
                        <img src="<?=($list['label_img']?\Yii::$app->params['upload_url'].$list['label_img']:\Yii::$app->params['default_label_img'])?>" alt="<?=$list['title']?>" width = "220" height = "150">
                    </a>
                </div>
                <div class="col-lg-7 btn-group">
                    <h1><a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><?=$list['title']?></a></h1>
                    <span class="post-tags">
                        <span class="glyphicon glyphicon-user"></span><?=$list['media']?>&nbsp;
                        <span class="glyphicon glyphicon-time"></span><?=date('Y-m-d',$list['created_at'])?>&nbsp;
                        <span class="glyphicon glyphicon-eye-open"></span><?=isset($list['extend']['browser'])?$list['extend']['browser']:0?>&nbsp;
                    </span>
                    <p class="post-content"><?=$list['summary']?></p>
                    <a href="<?=Url::to(['post/delete','id'=>$list['id']])?>"><button class="btn btn-warning no-radius btn-sm pull-right">删除文章</button></a>    
                    <a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><button class="btn btn-warning no-radius btn-sm pull-right">阅读全文</button></a>
                </div>
            </div>
            <div class="tags">
                <?php if(!empty($list['tags'])):?>
                <span class="fa fa-tags"></span>
                    <?php foreach ($list['tags'] as $lt):?>
                    <a href="#"><?=$lt?></a>，
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
        <?php endforeach;?>            
    </div>
    <?php if($this->context->page):?>
    <div class="page"><?=LinkPager::widget(['pagination' => $data['page']]);?></div>
    <?php endif;?>
</div>