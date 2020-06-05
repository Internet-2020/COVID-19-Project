<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *新闻相关标签 model层
*/

namespace common\models;

use Yii;
use common\models\base\BaseModel;

/**
 * This is the model class for table "hlw_relation_post_tags".
 *
 * @property int $id 自增ID
 * @property int|null $post_id 文章ID
 * @property int|null $tag_id 标签ID
 */
class RelationPostTagModel extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%relation_post_tags}}';
    }

    public function getTag()
    {
        return $this->hasOne(TagModel::className(),['id'=>'tag_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'tag_id'], 'integer'],
            [['post_id', 'tag_id'], 'unique', 'targetAttribute' => ['post_id', 'tag_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'tag_id' => 'Tag ID',
        ];
    }
}
