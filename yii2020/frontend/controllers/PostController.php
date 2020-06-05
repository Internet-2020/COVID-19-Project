<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *前台 新闻控制 controller层
 */

namespace frontend\controllers;

/**
*文章控制器
*/
use Yii;
use frontend\controllers\base\BaseController;
use frontend\models\PostForm;
use common\models\CatsModel;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\base\BaseObject;
use common\models\PostExtendModel;

class PostController extends BaseController
{

	public $layout = "main_layout";

	/**
	*文章列表
	*/
	public function actionIndex()
	{
		return $this->render('index');
	}
    
    /**
     * 文章详情
     */
    public function actionView($id)
    {
        $model = new PostForm();
        $data = $model->getViewById($id);

        //文章统计
        $model = new PostExtendModel();
        $model->upCounter(['post_id'=>$id],'browser',1);

        return $this->render('view',['data'=>$data]);
    }

}