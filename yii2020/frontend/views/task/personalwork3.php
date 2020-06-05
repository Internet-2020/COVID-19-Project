<?php

/**
 *Team:Internet-2020
 *Coding by houxiao 1811481,20200523
 *This is the main layout of frontend web.
 *task\personalwork3
*/

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '个人作业';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="row">
        <div class="col-lg-3">
        </div>

        <div class="col-lg-6">
        <h1>李姝睿(1811485)</h1>

        <p style="font-size: 12px">
            所属团队：Internet-2020
        </p>
        <br/>
            <h4><a href="/yii2020/frontend/web/作业展示/data/person/作业1(1811485_李姝睿).zip" download="作业1(1811485_李姝睿).zip"  style="font-size: 15px">作业1：网页前端初探</a></h4>
            <h4><a href="/yii2020/frontend/web/作业展示/data/person/作业2(1811485_李姝睿).zip" download="作业2(1811485_李姝睿).zip"  style="font-size: 15px">作业2：Web前端设计</a></h4>
            <h4><a href="/yii2020/frontend/web/作业展示/data/person/作业3(1811485_李姝睿).zip" download="作业3(1811485_李姝睿).zip"  style="font-size: 15px">作业3：开源建站工具初试</a></h4>
        <div class="col-lg-9">
        </div>
    </div>

</div>
