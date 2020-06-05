<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 世界各国数据 数据库交互
 */

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ForeignCurrentDataModel;

/**
 * ForeignCurrentDataSearch represents the model behind the search form of `common\models\ForeignCurrentDataModel`.
 */
class ForeignCurrentDataSearch extends ForeignCurrentDataModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['continentName', 'countryName', 'country_name_english'], 'safe'],
            [['country_confirmedCount', 'country_suspectedCount', 'country_curedCount', 'country_deadCount'], 'integer'],
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
        $query = ForeignCurrentDataModel::find();

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
            'country_confirmedCount' => $this->country_confirmedCount,
            'country_suspectedCount' => $this->country_suspectedCount,
            'country_curedCount' => $this->country_curedCount,
            'country_deadCount' => $this->country_deadCount,
        ]);

        $query->andFilterWhere(['like', 'continentName', $this->continentName])
            ->andFilterWhere(['like', 'countryName', $this->countryName])
            ->andFilterWhere(['like', 'country_name_english', $this->country_name_english]);

        return $dataProvider;
    }
}
