<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 国内每日数据 view层 用于更新
 */


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChinaDataModel */

$this->title = '更改数据: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '数据管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="china-data-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
