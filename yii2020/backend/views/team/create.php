<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 团队管理 view层 用于创建
 */

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TeamModel */

$this->title = '添加团队成员';
$this->params['breadcrumbs'][] = ['label' => '团队管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
