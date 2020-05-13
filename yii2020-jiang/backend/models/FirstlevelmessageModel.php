<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 一级留言 model
 */

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hlw_firstlevelmessage".
 *
 * @property int $flmID
 * @property string|null $userName
 * @property string|null $flmTime
 * @property string|null $flmContent
 * @property int|null $secNum
 */
class FirstlevelmessageModel extends \yii\db\ActiveRecord
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
            'flmID' => '一级留言ID',
            'userName' => '用户名',
            'flmTime' => '发表时间',
            'flmContent' => '内容',
            'secNum' => '二级留言数',
        ];
    }
}
