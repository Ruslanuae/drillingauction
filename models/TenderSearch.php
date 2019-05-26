<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tender;

/**
 * TenderSearch represents the model behind the search form of `app\models\Tender`.
 */
class TenderSearch extends Tender
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tender_type_id'], 'integer'],
            [['name_of_equipment_description', 'desc_prv_text', 'rental_period', 'starting_from_date', 'end_destination', 'requested_standard', 'other_information', 'requested_documents', 'send_request', 'looking_to_buy_before', 'need_to_be_ready_before', 'location_of_equipment', 'type_of_certification'], 'safe'],
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
        $query = Tender::find();

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
            'tender_type_id' => $this->tender_type_id,
        ]);

        $query->andFilterWhere(['like', 'name_of_equipment_description', $this->name_of_equipment_description])
            ->andFilterWhere(['like', 'desc_prv_text', $this->desc_prv_text])
            ->andFilterWhere(['like', 'rental_period', $this->rental_period])
            ->andFilterWhere(['like', 'starting_from_date', $this->starting_from_date])
            ->andFilterWhere(['like', 'end_destination', $this->end_destination])
            ->andFilterWhere(['like', 'requested_standard', $this->requested_standard])
            ->andFilterWhere(['like', 'other_information', $this->other_information])
            ->andFilterWhere(['like', 'requested_documents', $this->requested_documents])
            ->andFilterWhere(['like', 'send_request', $this->send_request])
            ->andFilterWhere(['like', 'looking_to_buy_before', $this->looking_to_buy_before])
            ->andFilterWhere(['like', 'need_to_be_ready_before', $this->need_to_be_ready_before])
            ->andFilterWhere(['like', 'location_of_equipment', $this->location_of_equipment])
            ->andFilterWhere(['like', 'type_of_certification', $this->type_of_certification]);

        return $dataProvider;
    }
}
