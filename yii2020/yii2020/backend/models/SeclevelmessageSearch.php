<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 二级留言 数据库交互
 */

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SeclevelmessageModel;

/**
 * SeclevelmessageSearch represents the model behind the search form of `backend\models\SeclevelmessageModel`.
 */
class SeclevelmessageSearch extends SeclevelmessageModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flmID', 'slmID'], 'integer'],
            [['userName', 'secTime', 'slmContent'], 'safe'],
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
        $query = SeclevelmessageModel::find();

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
            'flmID' => $this->flmID,
            'slmID' => $this->slmID,
            'secTime' => $this->secTime,
        ]);

        $query->andFilterWhere(['like', 'userName', $this->userName])
            ->andFilterWhere(['like', 'slmContent', $this->slmContent]);

        return $dataProvider;
    }
}
