<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 国内每日数据 view层 用于更新
 */


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ForeignCurrentDataModel */

$this->title = '更改数据: ' . $model->countryName;
$this->params['breadcrumbs'][] = ['label' => '数据管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->countryName, 'url' => ['view', 'id' => $model->countryName]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="foreign-current-data-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
