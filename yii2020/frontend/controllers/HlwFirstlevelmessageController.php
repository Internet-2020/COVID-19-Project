<?php

namespace frontend\controllers;

use Yii;
use frontend\models\HlwFirstlevelmessage;
use frontend\models\HlwFirstlevelmessageSearch;
use frontend\models\HlwSeclevelmessage;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HlwFirstlevelmessageController implements the CRUD actions for HlwFirstlevelmessage model.
 */
class HlwFirstlevelmessageController extends Controller
{
    public $layout = "main_layout";
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all HlwFirstlevelmessage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $Hotmessage=Hlwfirstlevelmessage::findHotmessage();

        $searchModel = new HlwFirstlevelmessageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'Hotmessage'=>$Hotmessage,
        ]);
    }

    /**
     * Displays a single HlwFirstlevelmessage model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HlwFirstlevelmessage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HlwFirstlevelmessage();



        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['detail', 'flmID' => $model->flmID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing HlwFirstlevelmessage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->flmID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing HlwFirstlevelmessage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HlwFirstlevelmessage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HlwFirstlevelmessage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HlwFirstlevelmessage::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDetail($flmID)
    {
        /*准备数据模型*/
        $model = $this->findModel($flmID);
        $hlwseclevelmessageModel = new HlwSeclevelmessage();
        if(Yii::$app->user->isGuest)
        {
            $hlwseclevelmessageModel->userName= "游客";
        }
        else if(!Yii::$app->user->isGuest){
            $hlwseclevelmessageModel->userName = Yii::$app->user->identity->username;
        }
        /*当二级留言提交时，处理二级留言*/
        if($hlwseclevelmessageModel->load(Yii::$app->request->post()))
        {
            $model->secNum=$model->hlwseclevelmessageCount+1;
            $hlwseclevelmessageModel->flmID = $flmID;
            $hlwseclevelmessageModel->slmID = $model->hlwseclevelmessageCount+1;
            $hlwseclevelmessageModel->secTime = date("Y-m-d H:i:s");
            $hlwseclevelmessageModel->save();
            $hlwseclevelmessageModel->slmContent="";
            $model->update();
        }

        /*传数据给视图渲染*/
        return $this->render('detail',[
            'model'=>$model,
            'hlwseclevelmessageModel'=>$hlwseclevelmessageModel,
        ]);
    }
}
