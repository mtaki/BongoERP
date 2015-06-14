<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\AccountType;

/**
 * AccountTypeSearch represents the model behind the search form about `app\modules\setting\models\AccountType`.
 */
class AccountTypeSearch extends AccountType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['account_type_code', 'account_name', 'account_description', 'Is_DR_or_CR', 'Is_for_office_or_customer', 'interest_applic_cycle'], 'safe'],
            [['default_DR_rate', 'default_CR_rate', 'Is_customer_balance'], 'number'],
            [['gl_sub_head'], 'integer'],
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
        $query = AccountType::find();

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
            'default_DR_rate' => $this->default_DR_rate,
            'default_CR_rate' => $this->default_CR_rate,
            'Is_customer_balance' => $this->Is_customer_balance,
            'gl_sub_head' => $this->gl_sub_head,
        ]);

        $query->andFilterWhere(['like', 'account_type_code', $this->account_type_code])
            ->andFilterWhere(['like', 'account_name', $this->account_name])
            ->andFilterWhere(['like', 'account_description', $this->account_description])
            ->andFilterWhere(['like', 'Is_DR_or_CR', $this->Is_DR_or_CR])
            ->andFilterWhere(['like', 'Is_for_office_or_customer', $this->Is_for_office_or_customer])
            ->andFilterWhere(['like', 'interest_applic_cycle', $this->interest_applic_cycle]);

        return $dataProvider;
    }
}
