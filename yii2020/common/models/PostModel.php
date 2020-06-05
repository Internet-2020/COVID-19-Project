<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *新闻数据 model层
 */


namespace common\models;

use Yii;
use common\models\base\BaseModel;

/**
 * This is the model class for table "hlw_posts".
 *
 * @property int $id 自增ID
 * @property string|null $title 标题
 * @property string|null $summary 摘要
 * @property string|null $content 内容
 * @property string|null $label_img 标签图
 * @property int|null $cat_id 分类id
 * @property int|null $user_id 用户id
 * @property string|null $user_name 用户名
 * @property int|null $is_valid 是否有效：0-未发布 1-已发布
 * @property int|null $created_at 创建时间
 * @property int|null $updated_at 更新时间
 */
class PostModel extends BaseModel
{
    const IS_VALID = 1; //发布
    const NO_VALID = 0; //未发布

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%posts}}';
    }

    public function getRelate()
    {
        return $this->hasMany(RelationPostTagModel::className(),['post_id'=>'id']);
    }

    public function getExtend()
    {
        return $this->hasOne(PostExtendModel::className(),['post_id'=>'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['cat_id', 'user_id', 'is_valid', 'created_at', 'updated_at'], 'integer'],
            [['title', 'media', 'summary', 'label_img', 'user_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'media' => 'Media',
            'summary' => 'Summary',
            'content' => 'Content',
            'label_img' => 'Label Img',
            'cat_id' => 'Cat ID',
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'is_valid' => 'Is Valid',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
