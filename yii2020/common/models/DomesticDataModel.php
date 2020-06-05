<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *国内各省市数据 model层
 */

namespace common\models;

use Yii;
use common\models\base\BaseModel;

/**
 * This is the model class for table "hlw_domestic_data".
 *
 * @property string $provinceName 省市名
 * @property int $province_confirmedCount 省市确诊人数
 * @property int $province_suspectedCount 省市疑似人数
 * @property int $province_curedCount 省市治愈人数
 * @property int $province_deadCount 省市死亡人数
 * @property string $updataTime
 */
class DomesticDataModel extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%domestic_data}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provinceName', 'province_confirmedCount', 'province_suspectedCount', 'province_curedCount', 'province_deadCount', 'updataTime'], 'required'],
            [['province_confirmedCount', 'province_suspectedCount', 'province_curedCount', 'province_deadCount'], 'integer'],
            [['updataTime'], 'safe'],
            [['provinceName'], 'string', 'max' => 3],
            [['provinceName'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'provinceName' => 'Province Name',
            'province_confirmedCount' => 'Province Confirmed Count',
            'province_suspectedCount' => 'Province Suspected Count',
            'province_curedCount' => 'Province Cured Count',
            'province_deadCount' => 'Province Dead Count',
            'updataTime' => 'Updata Time',
        ];
    }
}
