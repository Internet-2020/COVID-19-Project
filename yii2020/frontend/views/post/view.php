<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *前台 新闻详情 view层
*/

$this->title = $data['title'];
$this->params['breadcrumbs'][] = ['label'=>'文章','url'=>['post/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class = "row">
    <div class = "col-lg-9">
        <div class = "page-title">
            <h1><?=$data['title']?></h1>
            <sapn>作者：<?=$data['user_name']?></span>
            <sapn>发布：<?=date('Y-m-d',$data['created_at']);?></span>
            <sapn>浏览：<?=$data['extend']['browser']?$data['extend']['browser']:0?>次</span>
        </div>
        <div class = "page-content" style="font-size: 12px">
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