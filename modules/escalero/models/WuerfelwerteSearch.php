<?php

namespace app\modules\escalero\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\escalero\models\Wuerfelwerte;

/**
 * WuerfelwerteSearch represents the model behind the search form about `app\modules\escalero\models\Wuerfelwerte`.
 */
class WuerfelwerteSearch extends Wuerfelwerte
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wuerfelwert'], 'integer'],
            [['wuerfelbild', 'bedeutung'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Wuerfelwerte::find();

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
            'wuerfelwert' => $this->wuerfelwert,
        ]);

        $query->andFilterWhere(['like', 'wuerfelbild', $this->wuerfelbild])
            ->andFilterWhere(['like', 'bedeutung', $this->bedeutung]);

        return $dataProvider;
    }
}
