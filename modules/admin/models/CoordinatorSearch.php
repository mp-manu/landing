<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Coordinator;

/**
 * CoordinatorSearch represents the model behind the search form of `app\models\Coordinator`.
 */
class CoordinatorSearch extends Coordinator
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'project_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
            [['unversity', 'country', 'address', 'activity_type', 'web_site', 'org_contact', 'type', 'country_flag'], 'safe'],
            [['eu_contribution'], 'number'],

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
        $query = Coordinator::find();

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
            'project_id' => $this->project_id,
            'eu_contribution' => $this->eu_contribution,
            'created_at' => $this->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->updated_at,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'unversity', $this->unversity])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'activity_type', $this->activity_type])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'web_site', $this->web_site])
            ->andFilterWhere(['like', 'org_contact', $this->org_contact])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'country_flag', $this->country_flag]);

        return $dataProvider;
    }
}
