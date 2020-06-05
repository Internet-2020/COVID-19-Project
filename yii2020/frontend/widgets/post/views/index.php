<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *前台 新闻列表组件
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
                <div class="col-lg-4 label-img-size">
                    <a href="#" class="post-label">
                        <img src="<?=($list['label_img']?\Yii::$app->params['upload_url'].$list['label_img']:\Yii::$app->params['default_label_img'])?>" alt="<?=$list['title']?>" width = "220" height = "150">
                    </a>
                </div>
                <div class="col-lg-8 btn-group">
                    <h1><a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><?=$list['title']?></a></h1>
                    <span class="post-tags">
                        <span class="glyphicon glyphicon-user"></span><?=$list['media']?>&nbsp;
                        <span class="glyphicon glyphicon-time"></span><?=date('Y-m-d',$list['created_at'])?>&nbsp;
                        <span class="glyphicon glyphicon-eye-open"></span><?=isset($list['extend']['browser'])?$list['extend']['browser']:0?>&nbsp;
                    </span>
                    <p class="post-content" style="font-size: 15px"><?=$list['summary']?></p>
                    <a href="<?=Url::to(['post/view','id'=>$list['id']])?>">
                    <button class="btn btn-warning no-radius btn-sm pull-right" style="font-size: 15px">阅读全文</button>
                    </a>
                </div>
            </div>
            <div class="tags">
                <?php if(!empty($list['tags'])):?>
                <span class="fa fa-tags"></span>
                    <?php foreach ($list['tags'] as $lt):?>
                    <a style = "color:purple"><?=$lt?></a>，
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