<?php

namespace frontend\models;

/**
 * Team:Internet-2020;
 * Coding by Lishurui 1811485,20200514
 * This is HlwfirstlevelmessageSearch model of the frontend MessageBox part
 */

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HlwFirstlevelmessage;

/**
 * HlwFirstlevelmessageSearch represents the model behind the search form of `frontend\models\HlwFirstlevelmessage`.
 */
class HlwFirstlevelmessageSearch extends HlwFirstlevelmessage
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flmID', 'secNum'], 'integer'],
            [['userName', 'flmTime', 'flmContent'], 'safe'],
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
        $query = HlwFirstlevelmessage::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=>['defaultOrder'=>['flmID'=>SORT_DESC]],
            'pagination'=>['pageSize'=>5],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'flmID' => $this->flmID,
            'flmTime' => $this->flmTime,
            'secNum' => $this->secNum,
        ]);

        $query->andFilterWhere(['like', 'userName', $this->userName])
            ->andFilterWhere(['like', 'flmContent', $this->flmContent]);

        return $dataProvider;
    }
}
