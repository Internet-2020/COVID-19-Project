<?php
/**
 *Team:Internet-2020
 *Coding by houxiao 1811481,20200523
 *This is the main layout of frontend web.
 *column\科普栏目\图片轮播
*/
use yii\helpers\Url;
?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
             <?php foreach ($data['items'] as $k=>$list):?>
           <li data-target="#carousel-example-generic" data-slide-to="<?=$k?>" class="active"></li>
           <?php endforeach;?>
         </ol>

         <!-- Wrapper for slides -->
         <div class="carousel-inner home-banner" role="listbox">
             <?php foreach ($data['items'] as $k=>$list):?>
           <div class="item <?= (isset($list['active'])&&$list['active'])?'active':'';?>">
             <img src="<?=$list['image_url']?>" alt="<?=$list['label']?>" height='500px' width='850px'>
             <div class="carousel-caption">
               <?=$list['html']?>
             </div>
           </div>
             <?php endforeach;?>

         </div>

         <!-- Controls -->
         <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left"></span>
         </a>
         <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right"></span>
         </a>
       </div>