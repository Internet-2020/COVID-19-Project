<?php
/**
 *Team:Internet-2020
 *Coding by houxiao 1811481,20200523
 *This is the main layout of frontend web.
 * Column controller
*/

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\controllers\base\BaseController;

class ColumnController extends BaseController
{
    public $layout = "main_layout";
   
    /**
     * 科普栏目.
     *
     */
    public function actionScience()
    {
        return $this->render('science');
    }

    /**
     * 防疫栏目.
     *
     */
    public function actionPrevention()
    {
        return $this->render('prevention');
    }

    
}
