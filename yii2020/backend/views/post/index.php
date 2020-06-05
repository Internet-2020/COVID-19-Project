<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 新闻列表 view层
 */

use backend\widgets\post\PostWidget;
use yii\base\Widget;
$this->title = "列表";
$this->params['breadcrumbs'][] = ['label'=>'新闻','url'=>['post/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-lg-9">
		<?=PostWidget::widget()?>
	</div>
	<div class="col-lg-3">
	</div>
</div>