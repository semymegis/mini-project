<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Turnamen;

/**
 * TurnamenSearch represents the model behind the search form about `app\models\Turnamen`.
 */
class TurnamenSearch extends Turnamen
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_id', 'user_id', 'tlp_captain', 'tlp_1', 'tlp_2', 'tlp_3'], 'integer'],
            [['nama_captain', 'gender_captain', 'nama_1', 'gender_1', 'nama_2', 'gender_2', 'nama_3', 'gender_3', 'created_date'], 'safe'],
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
        $query = Turnamen::find();

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
            'team_id' => $this->team_id,
            'user_id' => $this->user_id,
            'tlp_captain' => $this->tlp_captain,
            'tlp_1' => $this->tlp_1,
            'tlp_2' => $this->tlp_2,
            'tlp_3' => $this->tlp_3,
            'created_date' => $this->created_date,
        ]);

        $query->andFilterWhere(['like', 'nama_captain', $this->nama_captain])
            ->andFilterWhere(['like', 'gender_captain', $this->gender_captain])
            ->andFilterWhere(['like', 'nama_1', $this->nama_1])
            ->andFilterWhere(['like', 'gender_1', $this->gender_1])
            ->andFilterWhere(['like', 'nama_2', $this->nama_2])
            ->andFilterWhere(['like', 'gender_2', $this->gender_2])
            ->andFilterWhere(['like', 'nama_3', $this->nama_3])
            ->andFilterWhere(['like', 'gender_3', $this->gender_3]);

        return $dataProvider;
    }
}
