<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *前台 新闻 model层
*/

namespace frontend\models;
use Yii;
use yii\base\Model;
use common\models\PostModel;
use yii\base\BaseObject;
use common\models\RelationPostTagModel;
use yii\db\Query;
/**
*文章表单模型
*/

class PostForm extends Model
{
	public $id;
	public $title;
	public $content;
	public $label_img;
	public $cat_id;
	public $tags;
	public $media;

	public $_lastError = "";

	public function attributeLabels()
	{
		return[
			'id'=>'编码',
			'title'=>'标题',
			'content'=>'内容',
			'label_img'=>'标签图',
			'tags'=>'标签',
			'cat_id'=>'分类',
		];
	}

	public static function getList($cond, $curPage = 1, $pageSize = 5, $orderBy = ['id'=>SORT_DESC])
	{
		$model = new PostModel();
		//查询语句
		$select = ['id', 'media','title', 'summary', 'label_img', 'cat_id', 'user_id', 'user_name','is_valid', 'created_at', 'updated_at'];
		$query = $model->find()->select($select)->where($cond)->with('relate.tag','extend')->orderBy($orderBy);

		//获取分页数据
		$res = $model->getPages($query, $curPage, $pageSize);
		//格式化
		$res['data'] = self::_formatList($res['data']);

		return $res;
	}

	/**
	*数据格式化
	*@param unknown $data
	*/
	public static function _formatList($data)
	{
		foreach ($data as &$list){
			$list['tags'] = [];
			if(isset($list['relate']) && !empty($list['relate'])){
				foreach ($list['relate'] as $lt){
					$list['tags'][] = $lt['tag']['tag_name'];
				}
			}
			unset($list['relate']);
		}

		return $data;
	}

	public function getViewById($id)
	{
		$res = PostModel::find()->with('relate.tag', 'extend')->where(['id'=>$id])->asArray()->one();
		if(!$res){
			throw new NotFoundHttpException('文章不存在！');
		}
		//处理标签格式
		$res['tags'] = [];
		if(isset($res['relate']) && !empty($res['relate'])){
			foreach($res['relate'] as $list){
				$res['tags'][] = $list['tag']['tag_name'];
			}
		}
		unset($res['relate']);
		return $res;
	}

	/**
	*截取文章摘要
	*@param number $s
	*@param number $e
	*@param string $char
	*@return NULL|string
	*/
	private function _getSummary($s = 0,$e = 90,$char = 'utf-8')
	{
		if(empty($this->content))
			return null;

		return (mb_substr(str_replace('&nbsp;',' ',strip_tags($this->content)),$s,$e,$char));
	}

}
