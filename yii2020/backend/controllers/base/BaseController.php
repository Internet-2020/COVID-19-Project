<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 controller 基类 控制层
 */

namespace backend\controllers\base;
/**
*基础控制器
*/
use yii\web\Controller;

class BaseController extends Controller
{
	public function beforeAction($action)
	{
		if(!parent::beforeAction($action))
		{
			return false;
		}
		return true;
	}
}