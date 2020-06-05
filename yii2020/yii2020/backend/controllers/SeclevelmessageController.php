<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 二级留言 控制层
 */


namespace backend\controllers;

use Yii;
use backend\models\SeclevelmessageModel;
use backend\models\SeclevelmessageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * SeclevelmessageController implements the CRUD actions for SeclevelmessageModel model.
 */
class SeclevelmessageController extends Controller
{
    public $layout = "main_layout";
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [
                            'logout',
                            'index',
                            '_form',
                            '_search',
                            'create',
                            'update',
                            'view'
                        ],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SeclevelmessageModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SeclevelmessageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SeclevelmessageModel model.
     * @param integer $flmID
     * @param integer $slmID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($flmID, $slmID)
    {
        return $this->render('view', [
            'model' => $this->findModel($flmID, $slmID),
        ]);
    }

    /**
     * Creates a new SeclevelmessageModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SeclevelmessageModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'flmID' => $model->flmID, 'slmID' => $model->slmID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SeclevelmessageModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $flmID
     * @param integer $slmID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($flmID, $slmID)
    {
        $model = $this->findModel($flmID, $slmID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'flmID' => $model->flmID, 'slmID' => $model->slmID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SeclevelmessageModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $flmID
     * @param integer $slmID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($flmID, $slmID)
    {
        $this->findModel($flmID, $slmID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SeclevelmessageModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $flmID
     * @param integer $slmID
     * @return SeclevelmessageModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($flmID, $slmID)
    {
        if (($model = SeclevelmessageModel::findOne(['flmID' => $flmID, 'slmID' => $slmID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
