<?php

namespace app\modules\escalero\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\escalero\models\Wuerfeltableau;

/**
 * WuerfeltableauSearch represents the model behind the search form about `app\modules\escalero\models\Wuerfeltableau`.
 */
class WuerfeltableauSearch extends Wuerfeltableau
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wuerfel', 'wert', 'halten'], 'integer'],
            [['bild'], 'safe'],
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
        $query = Wuerfeltableau::find();

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
            'wuerfel' => $this->wuerfel,
            'wert' => $this->wert,
            'halten' => $this->halten,
        ]);

        $query->andFilterWhere(['like', 'bild', $this->bild]);

        return $dataProvider;
    }
}
