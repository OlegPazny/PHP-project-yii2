<?php

namespace frontend\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Post as PostModel;

/**
 * Post represents the model behind the search form of `app\models\Post`.
 */
class Post extends PostModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ID_User', 'ID_Brand', 'ID_Model', 'ID_Engine', 'ID_Body', 'ID_Gearbox', 'ID_Color', 'Year', 'Price', 'Run'], 'integer'],
            [['Photo', 'City', 'Date', 'Description'], 'safe'],
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
        $query = PostModel::find();

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
            'ID_User' => $this->ID_User,
            'ID_Brand' => $this->ID_Brand,
            'ID_Model' => $this->ID_Model,
            'ID_Engine' => $this->ID_Engine,
            'ID_Body' => $this->ID_Body,
            'ID_Gearbox' => $this->ID_Gearbox,
            'ID_Color' => $this->ID_Color,
            'Year' => $this->Year,
            'Price' => $this->Price,
            'Run' => $this->Run,
            'Date' => $this->Date,
        ]);

        $query->andFilterWhere(['like', 'Photo', $this->Photo])
            ->andFilterWhere(['like', 'City', $this->City])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
