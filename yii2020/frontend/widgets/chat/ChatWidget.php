<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *前台 留言板组件
*/
namespace frontend\widgets\chat;

use Yii;
use yii\bootstrap\Widget;
use yii\base\BaseObject;
use frontend\models\FeedForm;

class ChatWidget extends Widget
{
    public function run()
    {
        $feed = new FeedForm();
        $data['feed'] = $feed->getList();
        return $this->render('index',['data'=>$data]);
    }
}
