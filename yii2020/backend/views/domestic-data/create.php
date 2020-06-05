<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 国内各省市数据 view层 用于新建
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DomesticDataModel */

$this->title = '添加数据';
$this->params['breadcrumbs'][] = ['label' => '数据管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="domestic-data-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
