<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *新闻标签 model层
 */

namespace common\models;

use Yii;
use common\models\base\BaseModel;

/**
 * This is the model class for table "hlw_tags".
 *
 * @property int $id 自增ID
 * @property string|null $tag_name 标签名称
 * @property int|null $post_num 关联文章数
 */
class TagModel extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tags}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_num'], 'integer'],
            [['tag_name'], 'string', 'max' => 255],
            [['tag_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag_name' => 'Tag Name',
            'post_num' => 'Post Num',
        ];
    }
}
