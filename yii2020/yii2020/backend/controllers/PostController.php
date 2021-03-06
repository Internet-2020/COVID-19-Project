<?php
namespace backend\controllers;

/**
*文章控制器
*/
use Yii;
use backend\controllers\base\BaseController;
use backend\models\PostForm;
use common\models\CatsModel;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\base\BaseObject;
use common\models\PostExtendModel;
use common\models\PostModel;


class PostController extends BaseController
{

	public $layout = "main_layout";

     public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','create','upload','ueditor'],
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['create','index','upload','ueditor'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    '*' => ['get','post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'upload'=>[
                'class' => 'common\widgets\file_upload\UploadAction',     
                'config' => [
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                ]
            ],

            'ueditor'=>[
                'class' => 'common\widgets\ueditor\UeditorAction',
                'config'=>[
                    //上传图片配置
                    'imageUrlPrefix' => "", /* 图片访问路径前缀 */
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可自定义保存路径和文件名格式 */
                ]
            ]

        ];
    }

	/**
	*文章列表
	*/
	public function actionIndex()
	{
		return $this->render('index');
	}

	/**
    *创建文章
    *@return string
    */
    public function actionCreate()
    {
        $model = new PostForm();
        //定义场景
        $model->setScenario(PostForm::SCENARIOS_CREATE);
        if($model->load(Yii::$app->request->post())&&$model->validate()){
        	if(!$model->create()){
        		Yii::$app->session->setFlash('warning',$model->_lastError);
        	}else{
        		return $this->redirect(['post/view','id'=>$model->id]);
        	}
        }
        //获取所有分类
        $cat = CatsModel::getAllCats();
        return $this->render('create',['model' => $model,'cat' => $cat]);
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

    /**
     * 删除文章
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = PostModel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}