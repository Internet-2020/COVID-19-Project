<?php

/**
 * Team:Internet-2020;
 * Coding by Lishurui 1811485,20200514
 * This is comment list view included in the detail view of the frontend MessageBox part
 */

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