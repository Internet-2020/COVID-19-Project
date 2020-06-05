<?php

/**
 *Team:Internet-2020
 *Coding by houxiao 1811481,20200523
 *This is the main layout of frontend web.
 *column\科普栏目\图片轮播
*/

namespace frontend\widgets\banner2;

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
                    'image_url'=>'statics/images/banner/b1.png',
                     'url'=>['column/prevention'],
                    'html' =>'',
                    'active' => 'active',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b2.png',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b3.png',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b4.png',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b5.png',
                    'url'=>['column/prevention'],
                    'html'=>'',
                ],
                [
                    'label'=>'demo',
                    'image_url'=>'statics/images/banner/b6.png',
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