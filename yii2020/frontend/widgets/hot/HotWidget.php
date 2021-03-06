<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *前台 热门浏览组件
 */

namespace frontend\widgets\hot;

use Yii;
use yii\base\Widget;
use common\models\PostModel;
use yii\helpers\Url;
use common\models\PostExtendModel;
use yii\db\Query;

class HotWidget extends Widget
{
    /**
     * 新闻的标题
     * @var unknown
     */
    public $title = '';
    
    /**
     * 显示条数
     * @var unknown
     */
    public $limit = 8;
    
    /**
     * 是否显示更多
     * @var unknown
     */
    public $more = true;
    
    /**
     * 是否显示分页
     * @var unknown
     */
    public $page = true;
    
    public function run()
    {
        $res = (new Query())
        ->select('a.browser, b.id, b.title')
        ->from(['a'=>PostExtendModel::tableName()])
        ->join('LEFT JOIN',['b'=>PostModel::tableName()],'a.post_id = b.id')
        ->where('b.is_valid ='.PostModel::IS_VALID)
        ->orderBy('browser DESC, id DESC')
        ->limit($this->limit)
        ->all();
        
        $result['title'] = $this->title?:'热门浏览';
        $result['more'] = Url::to(['post/index','sort'=>'hot']);
        $result['body'] = $res?:[];
        
        return $this->render('index',['data'=>$result]);
    }
}