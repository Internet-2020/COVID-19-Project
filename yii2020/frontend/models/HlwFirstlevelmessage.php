<?php

namespace frontend\models;

use Yii;
use Yii\helpers\Html;
use frontend\models\HlwSeclevelmessage;

/**
 * This is the model class for table "hlw_firstlevelmessage".
 *
 * @property int $flmID
 * @property string|null $userName
 * @property string|null $flmTime
 * @property string|null $flmContent
 * @property int|null $secNum
 */
class HlwFirstlevelmessage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hlw_firstlevelmessage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flmContent'],'required'],
            [['flmTime'], 'safe'],
            [['flmContent'], 'string'],
            [['secNum'], 'integer'],
            [['userName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'flmID' => '留言ID',
            'userName' => '用户姓名',
            'flmTime' => '留言时间',
            'flmContent' => '留言内容',
            'secNum' => '评论数目',
        ];
    }


    public function getUrl()
    {
        return Yii::$app->urlManager->createUrl(
            [
                'hlw-firstlevelmessage/detail',
                'flmID'=>$this->flmID,
            ]);
    }

    public function getHlwseclevelmessageCount()
    {
    	return HlwSeclevelmessage::find()->where(['flmID'=>$this->flmID])->count();
    }

    public function getHlwseclevelmessages()
    {
        return $this->hasMany(Hlwseclevelmessage::className(), ['flmID' => 'flmID']);
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert))
        {
            if($insert)
            {
                if(Yii::$app->user->isGuest)
                {
                    $this->userName= "游客";
                }
                else if(!Yii::$app->user->isGuest){
                    $this->userName = Yii::$app->user->identity->username;
                }
                $this->secNum= 0;
                $this->flmTime = date("Y-m-d H:i:s");;
            }
            return true;
        }
    }

    public static function findHotmessage($limit=3)
    {
        return $model=Hlwfirstlevelmessage::find()->orderBy('secNum DESC')->limit($limit)->all();
    }
}
