<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 新闻列表组件 view层
 */


namespace backend\widgets\post;
/**
*文章列表组件
*/
use Yii;
use yii\base\Widget;
use common\models\PostModel;
use backend\models\PostForm;
use yii\helpers\Url;
use yii\data\Pagination;

class PostWidget extends Widget
{
	/**
	*文章列表的标题
	*@var unknown
	*/
	public $title = '';

	/**
	*显示条数
	*@var unknown
	*/
	public $limit = 6;

	/**
	*是否显示更多
	*@var unknown
	*/
	public $more = true;

	/**
	*是否显示分页
	*@var unknown
	*/
	public $page = true;

	public function run()
	{
		$curPage = Yii::$app->request->get('page',1);
		//查询条件
		$cond = ['=','is_valid',PostModel::IS_VALID];
		$res = PostForm::getList($cond, $curPage, $this->limit);
		$result['title'] = $this->title?:"热点新闻";
		$result['more'] = Url::to(['post/index']);
		$result['body'] = $res['data']?:[];
		//是否显示分页
		if($this->page){
			$pages = new Pagination(['totalCount'=>$res['count'], 'pageSize'=>$res['pageSize']]);
			$result['page'] = $pages;
		}
		return $this->render('index',['data'=>$result]);
	}
}