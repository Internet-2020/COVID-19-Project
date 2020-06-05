<?php
/**
 *Team:Internet-2020
 *Coding by 周新星 1811526,20200604
 *后台 国内每日数据 数据库交互
 */

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ChinaDataModel;

/**
 * ChinaDataSearch represents the model behind the search form of `common\models\ChinaDataModel`.
 */
class ChinaDataSearch extends ChinaDataModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'currentConfirmedCount', 'confirmedCount', 'suspectedCount', 'curedCount', 'deadCount', 'seriousCount'], 'integer'],
            [['updateTime'], 'safe'],
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
        $query = ChinaDataModel::find();

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
            'id' => $this->id,
            'currentConfirmedCount' => $this->currentConfirmedCount,
            'confirmedCount' => $this->confirmedCount,
            'suspectedCount' => $this->suspectedCount,
            'curedCount' => $this->curedCount,
            'deadCount' => $this->deadCount,
            'seriousCount' => $this->seriousCount,
            'updateTime' => $this->updateTime,
        ]);

        return $dataProvider;
    }
}
