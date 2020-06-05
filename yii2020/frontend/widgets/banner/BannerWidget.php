<?php
/**
 *Team:Internet-2020
 *Coding by 
 *周新星，1811526
 *郑羽辰，1811524
 *前台 图片轮播组件
*/
namespace frontend\widgets\banner;

use Yii;
use yii\bootstrap\Widget;

class BannerWidget extends Widget
{
	public $items = [];

	public function init()
	{
		if(empty($this->items)){
			$this->items = [
				[
					'label'=>'demo',
					'image_url'=>'../web/statics/images/banner/0.png',
					'url'=>['post/index'],
					'html'=>'',
					'active'=>'active',
				],
				[
					'label'=>'demo',
					'image_url'=>'../web/statics/images/banner/1.png',
					'url'=>['post/index'],
					'html'=>'',
				],
				[
					'label'=>'demo',
					'image_url'=>'../web/statics/images/banner/2.png',
					'url'=>['post/index'],
					'html'=>'',
				],
			];
		}
	}

	public function run()
	{
		$data['items'] = $this->items;
		return $this->render('index',['data'=>$data]);
	}
}