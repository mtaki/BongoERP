<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\DbCrTrans;

/**
 * DbCrTransSearch represents the model behind the search form about `app\modules\setting\Models\DbCrTrans`.
 */
class DbCrTransSearch extends DbCrTrans
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tran_id', 'payment_method'], 'integer'],
            [['tran_date', 'vendor_customer_no', 'park_date', 'post_date', 'parked_by', 'posted_by', 'trans_status', 'tran_refference', 'trans_currency', 'cr_dr_indicator', 'gl_account', 'inv_number'], 'safe'],
            [['trans_amount'], 'number'],
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
        $query = DbCrTrans::find();

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
            'Tran_id' => $this->Tran_id,
            'tran_date' => $this->tran_date,
            'park_date' => $this->park_date,
            'post_date' => $this->post_date,
            'trans_amount' => $this->trans_amount,
            'payment_method' => $this->payment_method,
        ]);

        $query->andFilterWhere(['like', 'vendor_customer_no', $this->vendor_customer_no])
            ->andFilterWhere(['like', 'parked_by', $this->parked_by])
            ->andFilterWhere(['like', 'posted_by', $this->posted_by])
            ->andFilterWhere(['like', 'trans_status', $this->trans_status])
            ->andFilterWhere(['like', 'tran_refference', $this->tran_refference])
            ->andFilterWhere(['like', 'trans_currency', $this->trans_currency])
            ->andFilterWhere(['like', 'cr_dr_indicator', $this->cr_dr_indicator])
            ->andFilterWhere(['like', 'gl_account', $this->gl_account])
            ->andFilterWhere(['like', 'inv_number', $this->inv_number]);

        return $dataProvider;
    }
}
