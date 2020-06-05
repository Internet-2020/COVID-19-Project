<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 新闻详情页 view层
 */


$this->title = $data['title'];
$this->params['breadcrumbs'][] = ['label'=>'新闻','url'=>['post/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class = "row">
    <div class = "col-lg-9">
        <div class = "page-title">
            <h1><?=$data['title']?></h1>
            <sapn>媒体：<?=$data['media']?></span>
            <sapn>发布：<?=date('Y-m-d',$data['created_at']);?></span>
            <sapn>浏览：<?=$data['extend']['browser']?$data['extend']['browser']:0?>次</span>
        </div>
        <div class = "page-content">
            <?=$data['content']?>
        <div calss = "page-tag ">
        标签：
            <?php foreach($data['tags'] as $tag):?>
            <span><a href="#"><?=$tag?></a><span>
            <?php endforeach;?>
        </div>
    </div>
    <div calss = "col-lg-3">
        
    </div>
</div>