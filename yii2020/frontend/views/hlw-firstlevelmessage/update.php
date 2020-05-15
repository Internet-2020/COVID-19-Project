<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\HlwFirstlevelmessage */

$this->title = 'Update Hlw Firstlevelmessage: ' . $model->flmID;
$this->params['breadcrumbs'][] = ['label' => 'Hlw Firstlevelmessages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->flmID, 'url' => ['view', 'id' => $model->flmID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hlw-firstlevelmessage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
