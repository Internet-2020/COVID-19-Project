<?php
/**
 *Team:Internet-2020
 *Coding by 
 *周新星，1811526
 *郑羽辰，1811524
 *前台 图片轮播组件
*/
use yii\helpers\Url;
?>

<div class="panel">
    <div id="carousel-example-generic" class="carousel slide">
        <!-- 轮播（Carousel）指标 -->
        <ol class="carousel-indicators">
            <?php foreach ($data['items'] as $k=>$list):?>
                <li data-target="#carousel-example-generic" data-slide-to="<?=$k?>" class=" <?=(isset($list['active']) && $list['active'])?'active':''?>"></li>
            <?php endforeach;?>
        </ol>
        <!-- 轮播（Carousel）项目 -->
        <div class="carousel-inner home-banner" role="listbox">
            <?php foreach ($data['items'] as $k=>$list):?>
                <div class="item <?=(isset($list['active']) && $list['active'])?'active':''?>">
                   <a><img src="<?=$list['image_url']?>" alt="<?=$list['label']?>" height="220" width="900" object-fit="cover">
                        <div class="carousel-caption">
                            <?=$list['html']?>
                        </div>
                    </a>
                </div>
            <?php endforeach;?>
        </div>
        <!-- 轮播（Carousel）导航 -->
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">《</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">》</span>
        </a>
    </div>
</div>