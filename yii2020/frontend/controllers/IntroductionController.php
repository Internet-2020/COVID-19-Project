<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *前台 团队介绍控制 controller层
*/

namespace frontend\controllers;

use Yii;
use frontend\controllers\base\BaseController;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\base\BaseObject;
use common\models\TeamModel;
use frontend\models\TeamForm;
use yii\helpers\ArrayHelper;


class IntroductionController extends BaseController
{

    public $layout = "main_layout";
    
    public function actionIndex()
	{
		$model = TeamModel::find()->asArray()->all();
        $name = ArrayHelper::getColumn($model, 'name');
        $introduction = ArrayHelper::getColumn($model, 'introduction');
        $label_img = ArrayHelper::getColumn($model, 'label_img');

		return $this->render('index',[
            'name'=>$name,
            'introduction'=>$introduction,
            'label_img'=>$label_img
        ]);
	}

}