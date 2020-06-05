<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 二级留言 model
 */

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hlw_seclevelmessage".
 *
 * @property int $flmID
 * @property int $slmID
 * @property string|null $userName
 * @property string|null $secTime
 * @property string|null $slmContent
 */
class SeclevelmessageModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hlw_seclevelmessage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flmID', 'slmID'], 'required'],
            [['flmID', 'slmID'], 'integer'],
            [['secTime'], 'safe'],
            [['slmContent'], 'string'],
            [['userName'], 'string', 'max' => 255],
            [['flmID', 'slmID'], 'unique', 'targetAttribute' => ['flmID', 'slmID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'flmID' => '一级留言ID',
            'slmID' => '二级留言ID',
            'userName' => '用户名',
            'secTime' => '发表时间',
            'slmContent' => '内容',
        ];
    }
}
