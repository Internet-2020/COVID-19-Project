<?php

/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *前台 疫情数据控制 controller层
 */

namespace frontend\controllers;

/**
*数据控制器
*/
use Yii;
use frontend\controllers\base\BaseController;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\base\BaseObject;
use common\models\ChinaDataModel;
use common\models\ForeignCurrentDataModel;
use common\models\DomesticDataModel;
use yii\helpers\ArrayHelper;

class DataController extends BaseController
{

	public $layout = "main_layout";

	/**
	*数据可视化
	*/
	public function actionIndex()
	{
        $model = ChinaDataModel::find()->asArray()->all();
        $confirmedCount = ArrayHelper::getColumn($model, 'confirmedCount');
        $suspectedCount = ArrayHelper::getColumn($model, 'suspectedCount');
        $curedCount = ArrayHelper::getColumn($model, 'curedCount');
        $deadCount = ArrayHelper::getColumn($model, 'deadCount');
        $updateTime = ArrayHelper::getColumn($model, 'updateTime');

        $confirmedCount = array_reverse($confirmedCount);
        $suspectedCount = array_reverse($suspectedCount);
        $curedCount = array_reverse($curedCount);
        $deadCount = array_reverse($deadCount);
        $updateTime = array_reverse($updateTime);

		return $this->render('index',[
            'confirmedCount'=>$confirmedCount,
            'suspectedCount'=>$suspectedCount,
            'curedCount'=>$curedCount,
            'deadCount'=>$deadCount,
            'updateTime'=>$updateTime
        ]);
	}

    public function actionWorld()
    {
        $model = ForeignCurrentDataModel::find()->asArray()->all();
        $country_name_english = ArrayHelper::getColumn($model, 'country_name_english');
        $country_confirmedCount = ArrayHelper::getColumn($model, 'country_confirmedCount');
        $country_suspectedCount = ArrayHelper::getColumn($model, 'country_suspectedCount');
        $country_curedCount = ArrayHelper::getColumn($model, 'country_curedCount');
        $country_deadCount = ArrayHelper::getColumn($model, 'country_deadCount');
        return $this->render('world',[
            'country_name_english'=>$country_name_english,
            'country_confirmedCount'=>$country_confirmedCount,
            'country_suspectedCount'=>$country_suspectedCount,
            'country_curedCount'=>$country_curedCount,
            'country_deadCount'=>$country_deadCount
        ]);
    }

    public function actionChina()
    {
        $model = DomesticDataModel::find()->asArray()->all();
        $provinceName = ArrayHelper::getColumn($model, 'provinceName');
        $province_confirmedCount = ArrayHelper::getColumn($model, 'province_confirmedCount');
        $province_suspectedCount = ArrayHelper::getColumn($model, 'province_suspectedCount');
        $province_curedCount = ArrayHelper::getColumn($model, 'province_curedCount');
        $province_deadCount = ArrayHelper::getColumn($model, 'province_deadCount');
        return $this->render('china',[
            'provinceName'=>$provinceName,
            'province_confirmedCount'=>$province_confirmedCount,
            'province_suspectedCount'=>$province_suspectedCount,
            'province_curedCount'=>$province_curedCount,
            'province_deadCount'=>$province_deadCount
        ]);
    }

}