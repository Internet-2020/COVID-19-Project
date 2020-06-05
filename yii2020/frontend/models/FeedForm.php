<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *前台 新闻页留言板 model层
*/


namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\FeedModel;

/**
 * This is the model class for table "hlw_feeds".
 *
 * @property integer $id
 * @property string $content
 */
class FeedForm extends Model
{
    public $content;
    
    public $_lastError;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => '内容',
        ];
    }
    
    public function create()
    {
        try{
            $model = new FeedModel();
            $model->content = $this->content;
            $model->created_at = time();  
            if (Yii::$app->user->isGuest)
            {
                $model->user_id=0;
            } 
            else
            {
                $model->user_id = Yii::$app->user->identity->id;
            }       
            if(!$model->save())
                throw new \Exception('保存失败！');
            
            return true;
        }catch (\Exception $e){
            $this->_lastError = $e->getMessage();
            return false;
        }
    }
    
    public function getList()
    {
        $model = new FeedModel();
        $res = $model->find()->limit(10)->with('user')->orderBy(['id'=>SORT_DESC])->asArray()->all();
        
        return $res?:[];
    }
}
