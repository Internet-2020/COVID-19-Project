<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *新闻拓展 model层
*/

namespace common\models;

use Yii;
use common\models\base\BaseModel;

/**
 * This is the model class for table "hlw_post_extends".
 *
 * @property int $id 自增ID
 * @property int|null $post_id 文章id
 * @property int|null $browser 浏览量
 * @property int|null $collect 收藏量
 * @property int|null $praise 点赞
 * @property int|null $comment 评论
 */
class PostExtendModel extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%post_extends}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'browser', 'collect', 'praise', 'comment'], 'integer'],
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
            'browser' => 'Browser',
            'collect' => 'Collect',
            'praise' => 'Praise',
            'comment' => 'Comment',
        ];
    }


    /**
     * 更新文章统计
     * @param unknown $cond
     * @param unknown $attribute
     * @param nnknown $num
     */
    public function upCounter($cond, $attribute, $num)
    {
        $counter = $this->findOne($cond);
        if(!$counter){
            $this->setAttributes($cond);
            $this->$attribute = $num;
            $this->save();
        } else {
            $countData[$attribute] = $num;
            $counter->updateCounters($countData);
        }
    }
}
