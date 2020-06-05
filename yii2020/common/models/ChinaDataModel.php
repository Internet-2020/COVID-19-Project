<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *国内每日数据 model层
*/

namespace common\models;

use Yii;
use common\models\base\BaseModel;

/**
 * This is the model class for table "hlw_china_data".
 *
 * @property int $id 序号
 * @property int|null $currentConfirmedCount 当前确诊人数
 * @property int|null $confirmedCount 确诊人数
 * @property int|null $suspectedCount 怀疑人数
 * @property int|null $curedCount 治愈人数
 * @property int|null $deadCount 死亡人数
 * @property int|null $seriousCount 严重人数
 * @property string $updateTime 更新时间
 */
class ChinaDataModel extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%china_data}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currentConfirmedCount', 'confirmedCount', 'suspectedCount', 'curedCount', 'deadCount', 'seriousCount'], 'integer'],
            [['updateTime'], 'required'],
            [['updateTime'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'currentConfirmedCount' => 'Current Confirmed Count',
            'confirmedCount' => 'Confirmed Count',
            'suspectedCount' => 'Suspected Count',
            'curedCount' => 'Cured Count',
            'deadCount' => 'Dead Count',
            'seriousCount' => 'Serious Count',
            'updateTime' => 'Update Time',
        ];
    }
}
