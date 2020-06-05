<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *前台 标签云
 */

namespace frontend\widgets\tag;

use Yii;
use yii\bootstrap\Widget;
use yii\base\BaseObject;
use common\models\PostExtendModel;
use common\models\PostModel;
use yii\db\Query;
use common\models\TagModel;

class TagWidget extends Widget
{
    public $title = '';
    
    public $limit = 20;
    
    public function run()
    {
        $res = TagModel::find()
            ->orderBy(['post_num'=>SORT_DESC])
            ->limit($this->limit)
            ->all();
        
        $result['title'] = $this->title?:'标签云';
        $result['body'] = $res?:[];
        
        return $this->render('index',['data'=>$result]);
    }
  
    
}