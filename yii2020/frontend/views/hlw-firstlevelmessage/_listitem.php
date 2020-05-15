<?php
use yii\helpers\Html;
?>


    <div class="firstList">
        <div><p class="firstContent"><?= Html::encode($model->flmContent)?></p></div>
        <div>
        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
        <em><?= Html::encode($model->flmTime)."&nbsp&nbsp&nbsp&nbsp";?></em>
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        <em><?= Html::encode($model->userName)."&nbsp&nbsp&nbsp&nbsp";?></em>
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        <em><?= Html::a("评论($model->hlwseclevelmessageCount)",$model->url)?></em>
        </div>

        
    </div>