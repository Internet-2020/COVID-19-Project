<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 国内每日数据 view层 用于新建
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChinaDataModel */

$this->title = '添加数据';
$this->params['breadcrumbs'][] = ['label' => '管理数据', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="china-data-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
