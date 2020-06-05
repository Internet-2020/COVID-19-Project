<?php
/**
 *Team:Internet-2020
 *Coding by houxiao 1811481,20200523
 *This is the main layout of frontend web.
 * Task controller
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


class TaskController extends BaseController
{
    public $layout = "main_layout";
   
    /**
     * Displays teamwork.
     *
     */
    public function actionTeamwork()
    {
        return $this->render('teamwork');
    }

    /**
     * Displays personalwork.
     *
     */
   
    public function actionPersonalwork1()
    {
        return $this->render('personalwork1');
    }

    public function actionPersonalwork2()
    {
        return $this->render('personalwork2');
    }

    public function actionPersonalwork3()
    {
        return $this->render('personalwork3');
    }

    public function actionPersonalwork4()
    {
        return $this->render('personalwork4');
    }

    public function actionPersonalwork5()
    {
        return $this->render('personalwork5');
    }

    
}
