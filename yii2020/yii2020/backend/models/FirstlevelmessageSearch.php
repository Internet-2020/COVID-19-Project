<?php

/**
 *Team:Internet-2020
 *Coding by 姜欣妮，1811482,20200512
 *后台 留言板 一级留言 数据库交互
 */

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FirstlevelmessageModel;

/**
 * FirstlevelmessageSearch represents the model behind the search form of `backend\models\FirstlevelmessageModel`.
 */
class FirstlevelmessageSearch extends FirstlevelmessageModel
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
        $query = FirstlevelmessageModel::find();

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
            'flmTime' => $this->flmTime,
            'secNum' => $this->secNum,
        ]);

        $query->andFilterWhere(['like', 'userName', $this->userName])
            ->andFilterWhere(['like', 'flmContent', $this->flmContent]);

        return $dataProvider;
    }
}
