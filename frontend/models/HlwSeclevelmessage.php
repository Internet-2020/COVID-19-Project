<?php
/**
 * Team:Internet-2020;
 * Coding by Lishurui 1811485,20200514
 * This is HlwSeclevelmessage model of the frontend MessageBox part
 */

namespace frontend\models;

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
class HlwSeclevelmessage extends \yii\db\ActiveRecord
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
            [['slmID','flmID','slmContent'],'required'],
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
            'flmID' => '留言ID',
            'slmID' => '评论ID',
            'userName' => '用户姓名',
            'secTime' => '评论时间',
            'slmContent' => '评论内容',
        ];
    }
}
