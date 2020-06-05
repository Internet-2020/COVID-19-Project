<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *世界各国数据 model层
*/

namespace common\models;

use Yii;
use common\models\base\BaseModel;

/**
 * This is the model class for table "hlw_foreign_current_data".
 *
 * @property string|null $continentName 大洲名
 * @property string $countryName 国家名
 * @property string|null $country_name_english 国家英文名
 * @property int|null $country_confirmedCount 国家确诊人数
 * @property int|null $country_suspectedCount 国家怀疑人数
 * @property int|null $country_curedCount 国家治愈人数
 * @property int|null $country_deadCount 国家死亡人数
 */
class ForeignCurrentDataModel extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%foreign_current_data}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['countryName'], 'required'],
            [['country_confirmedCount', 'country_suspectedCount', 'country_curedCount', 'country_deadCount'], 'integer'],
            [['continentName', 'countryName', 'country_name_english'], 'string', 'max' => 255],
            [['countryName'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'continentName' => 'Continent Name',
            'countryName' => 'Country Name',
            'country_name_english' => 'Country Name English',
            'country_confirmedCount' => 'Country Confirmed Count',
            'country_suspectedCount' => 'Country Suspected Count',
            'country_curedCount' => 'Country Cured Count',
            'country_deadCount' => 'Country Dead Count',
        ];
    }
}
