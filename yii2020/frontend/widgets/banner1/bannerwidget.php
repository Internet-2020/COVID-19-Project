<?php

/**
 *Team:Internet-2020
 *Coding by houxiao 1811481,20200523
 *This is the main layout of frontend web.
 *column\防疫栏目\图片轮播
*/

namespace frontend\widgets\banner1;

use Yii;
use yii\bootstrap\Widget;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

class bannerwidget extends Widget
{
    public $items = []; 

    public function init()
    {
        if(empty($this->items))
        {
            $this->items = [
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b_0.jpg',
                     'url'=>['column/prevention'],
                    'html' =>'',
                    'active' => 'active',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b_1.jpg',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b_2.jpg',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b_3.jpg',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b_4.jpg',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b_5.jpg',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b_6.jpg',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b_7.jpg',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b_8.jpg',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b_9.jpg',
                    'url'=>['column/prevention'],
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