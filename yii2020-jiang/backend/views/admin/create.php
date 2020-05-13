<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 管理员 view层 创建
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Admin */

$this->title = Yii::t('app', 'Create Admin');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admins'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
