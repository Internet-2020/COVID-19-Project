<?php
/**
 *Team:Internet-2020
 *Coding by 郑羽辰，1811524,20200604
 *后台 国内各省市数据 数据库交互
*/


namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DomesticDataModel;

/**
 * DomesticDataSearch represents the model behind the search form of `common\models\DomesticDataModel`.
 */
class DomesticDataSearch extends DomesticDataModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['provinceName', 'updataTime'], 'safe'],
            [['province_confirmedCount', 'province_suspectedCount', 'province_curedCount', 'province_deadCount'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DomesticDataModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'province_confirmedCount' => $this->province_confirmedCount,
            'province_suspectedCount' => $this->province_suspectedCount,
            'province_curedCount' => $this->province_curedCount,
            'province_deadCount' => $this->province_deadCount,
            'updataTime' => $this->updataTime,
        ]);

        $query->andFilterWhere(['like', 'provinceName', $this->provinceName]);

        return $dataProvider;
    }
}
