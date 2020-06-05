<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 国内各省市数据 view层 用于更新
 */


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DomesticDataModel */

$this->title = '更改数据: ' . $model->provinceName;
$this->params['breadcrumbs'][] = ['label' => '数据管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->provinceName, 'url' => ['view', 'id' => $model->provinceName]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="domestic-data-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
