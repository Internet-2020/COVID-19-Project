<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *团队介绍 model层
*/

namespace common\models;

use Yii;
use common\models\base\BaseModel;


/**
 * This is the model class for table "hlw_team".
 *
 * @property string $name
 * @property string $introduction
 */
class TeamModel extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%team}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'introduction', 'label_img'], 'required'],
            [['name', 'introduction', 'label_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'introduction' => 'Introduction',
            'label_img' => 'Label_img',
        ];
    }
}
