<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\LoanType;

/**
 * LoanTypeSearch represents the model behind the search form about `app\modules\setting\models\LoanType`.
 */
class LoanTypeSearch extends LoanType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['loan_type', 'description'], 'safe'],
            [['interest_rate'], 'number'],
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
        $query = LoanType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'interest_rate' => $this->interest_rate,
        ]);

        $query->andFilterWhere(['like', 'loan_type', $this->loan_type])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
