<?php

/**
 *Team:Internet-2020
 *Coding by houxiao 1811481,20200523
 *This is the main layout of frontend web.
 *task\teamwork
*/

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '团队作业';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="row">
        <div class="col-lg-3">
        </div>

        <div class="col-lg-6">
        <h1>团队：Internet-2020</h1>

        <p style="font-size: 12px">
            团队成员：候潇，姜欣妮，李姝睿，郑羽辰，周新星
        </p>
        <br/>

            <h4><a href="/yii2020/frontend/web/作业展示/data/team/队名_需求文档.pdf" download="队名_需求文档.pdf" style="font-size: 15px">需求文档</a></h4>
            <h4><a href="/yii2020/frontend/web/作业展示/data/team/队名_设计文档.pdf" download="队名_设计文档.pdf" style="font-size: 15px">设计文档</a></h4>
            <h4><a href="/yii2020/frontend/web/作业展示/data/team/队名_实现文档.pdf" download="队名_实现文档.pdf" style="font-size: 15px">实现文档</a></h4>
            <h4><a href="/yii2020/frontend/web/作业展示/data/team/队名_用户手册.pdf" download="队名_用户手册.pdf" style="font-size: 15px">用户手册</a></h4>
            <h4><a href="/yii2020/frontend/web/作业展示/data/team/队名_部署文档.pdf" download="队名_部署文档.pdf" style="font-size: 15px">部署文档</a></h4>
            <h4><a href="/yii2020/frontend/web/作业展示/data/team/队名_项目展示.pdf" download="队名_项目展示.pdf" style="font-size: 15px">项目展示PPT</a></h4>
            <h4><a href="/yii2020/frontend/web/作业展示/data/team/队名_录屏讲解.pdf" download="队名_录屏讲解.pdf" style="font-size: 15px">录屏讲解</a></h4>
        </div>
        <div class="col-lg-9">
        </div>
    </div>
</div>