<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lead;

/**
 * LeadSearch represents the model behind the search form of `app\models\Lead`.
 */
class LeadSearch extends Lead
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lead', 'id_state', 'id_country', 'id_source', 'id_sector', 'id_project', 'id_state_client', 'id_qualification'], 'integer'],
            [['id_stripe', 'first_name', 'last_name', 'company', 'email', 'img', 'street', 'city', 'postal_code', 'title', 'phone', 'cell_phone', 'income', 'fax', 'website', 'quantity_worker', 'id_skype', 'id_twitter', 'description'], 'safe'],
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
        $query = Lead::find();

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
            'id_lead' => $this->id_lead,
            'id_state' => $this->id_state,
            'id_country' => $this->id_country,
            'id_source' => $this->id_source,
            'id_sector' => $this->id_sector,
            'id_project' => $this->id_project,
            'id_state_client' => $this->id_state_client,
            'id_qualification' => $this->id_qualification,
        ]);

        $query->andFilterWhere(['like', 'id_stripe', $this->id_stripe])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'postal_code', $this->postal_code])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'cell_phone', $this->cell_phone])
            ->andFilterWhere(['like', 'income', $this->income])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'quantity_worker', $this->quantity_worker])
            ->andFilterWhere(['like', 'id_skype', $this->id_skype])
            ->andFilterWhere(['like', 'id_twitter', $this->id_twitter])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
