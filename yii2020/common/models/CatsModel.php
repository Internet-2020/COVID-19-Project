<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *新闻分类 model层
*/

namespace common\models;

use Yii;
use common\models\base\BaseModel;

/**
 * This is the model class for table "hlw_cats".
 *
 * @property int $id 自增ID
 * @property string|null $cat_name 分类名称
 */
class CatsModel extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%cats}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => 'Cat Name',
        ];
    }

    /**
    *获取所有分类
    */
    public static function getAllCats()
    {
        $cat = ['0'=>'暂无分类'];
        $res = self::find()->asArray()->all();
        if ($res) {
            foreach($res as $k=>$list){
                $cat[$list['id']] = $list['cat_name'];
            }
        }
        return $cat;
    }

}
