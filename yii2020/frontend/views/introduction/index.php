<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *前台 团队介绍 view层
 */

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

<div class="row">
	<div class="col-lg-3">
	</div>
	<div class="col-lg-6">
		<div class="panel">
		    <div class="new-list">
		    <?php $i = 0?>
		    <?php foreach ($name as $a):?>
		        <div class="panel-body border-bottom">      
		            <div class="row">
		                <div class="col-lg-8 btn-group">
		                    <h1><?=$name[$i]?></h1>
		                    <p class="post-content" style="font-size: 15px"><?=$introduction[$i]?></p >
		                </div>
		                <div class="col-lg-4 btn-group">
						<a href="#" class="post-label">
                        <img src="<?=($label_img[$i]?\Yii::$app->params['upload_url'].$label_img[$i]:\Yii::$app->params['default_label_img2'])?>" width = "150" height = "200">
                    </a>
		                </div>
		            </div>
		            <?php $i=$i+1?>
		        </div>
		        <?php endforeach;?>            
		    </div>
		</div>
	</div>
	<div class="col-lg-9">