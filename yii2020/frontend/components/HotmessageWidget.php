<?php

/**
 * Team:Internet-2020;
 * Coding by Lishurui 1811485,20200514
 * This is custom widget of the frontend MessageBox part
 */

namespace frontend\components;

use yii\base\Widget;
use yii\helpers\Html;

class HotmessageWidget extends Widget
{
	public $Hotmessage;
	
	public function init()
	{
		parent::init();
	}
	
	public function run()
	{
		$HotmessageString='';
		
		foreach ($this->Hotmessage as $hlwfirstlevelmessage)
		{
			$HotmessageString.='<div>'.
					'<div>'.
					'<p style="color:#777777;font-style:italic;font-size:13px;margin-bottom:2px;margin-top:5px">'.
                    nl2br($hlwfirstlevelmessage->flmContent).'</p>'.
                    '<span class="glyphicon glyphicon-pencil" aria-hidden="ture">
                    </span> '.Html::a("评论($hlwfirstlevelmessage->secNum)",$hlwfirstlevelmessage->url).
					'&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-user" aria-hidden="ture">
                    </span> '.Html::encode($hlwfirstlevelmessage->userName).
					'</div></div>';
		}
		return  $HotmessageString;
	}
}