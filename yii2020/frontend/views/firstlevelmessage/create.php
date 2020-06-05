<?php
/**
 * Team:Internet-2020;
 * Coding by Lishurui 1811485,20200514
 * This is firstlevelmessage created view of the frontend MessageBox part
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model frontend\models\Firstlevelmessage */
$this->title="新增留言";
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="mybreadcrumb">
                <ol class="breadcrumb">
			    <li><a href="<?= Yii::$app->homeUrl;?>">首页</a></li>
                <li>留言板</a></li>
            </div>
            <h1 class="self-title"><?= Html::encode($this->title) ?></h1>
            <?= $this->render('_form', ['model' => $model]) ?>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
