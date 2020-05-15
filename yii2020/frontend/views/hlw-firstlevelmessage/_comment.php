<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php foreach(array_reverse($hlwseclevelmessages) as $hlwseclevelmessage): ?>

<div class="hlwseclevelmessage">

	<div class="row">
		<div class="col-md-8">
			<div class="seclevelmessage">
			    <div class="secContent"><?= $hlwseclevelmessage->slmContent;?></div>		
			    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
			     <em><?= Html::encode($hlwseclevelmessage->secTime)."&nbsp&nbsp&nbsp";?></em>
			    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			     <em><?= Html::encode($hlwseclevelmessage->userName)."&nbsp&nbsp&nbsp";?></em>
			    <br> 
		    </div>
	    </div>
    </div>
</div>

<?php endforeach;?>