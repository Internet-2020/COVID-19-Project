<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *前台 新闻页(首页) view层
*/

use frontend\assets\AppAsset;
use frontend\widgets\banner\BannerWidget;
use frontend\widgets\post\PostWidget;
use frontend\widgets\hot\HotWidget;
use frontend\widgets\chat\ChatWidget;
use frontend\widgets\tag\TagWidget;
use yii\base\Widget;

$this->title = '新闻-首页';
AppAsset::register($this);
?>

<div class="row">
	<div class="col-lg-9">
		<!-- 图片轮播 -->
		<?=BannerWidget::widget()?>
		<!-- 文章列表 -->
		<?=PostWidget::widget()?>
	</div>
	<div class="col-lg-3">
		<!-- 留言板 -->
		<?=ChatWidget::widget()?>
		<!--热门浏览-->
		<?=HotWidget::widget()?>
		<!-- 标签云 -->
		<?=TagWidget::widget()?>
	</div>
</div>