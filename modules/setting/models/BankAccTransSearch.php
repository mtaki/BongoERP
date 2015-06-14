<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\BankAccTrans;

/**
 * BankAccTransSearch represents the model behind the search form about `app\modules\setting\Models\BankAccTrans`.
 */
class BankAccTransSearch extends BankAccTrans
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['banktransid', 'type', 'transno'], 'integer'],
            [['bankact', 'ref', 'transdate', 'banktranstype', 'currcode'], 'safe'],
            [['amountcleared', 'exrate', 'functionalexrate', 'amount'], 'number'],
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
        $query = BankAccTrans::find();

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
            'banktransid' => $this->banktransid,
            'type' => $this->type,
            'transno' => $this->transno,
            'amountcleared' => $this->amountcleared,
            'exrate' => $this->exrate,
            'functionalexrate' => $this->functionalexrate,
            'transdate' => $this->transdate,
            'amount' => $this->amount,
        ]);

        $query->andFilterWhere(['like', 'bankact', $this->bankact])
            ->andFilterWhere(['like', 'ref', $this->ref])
            ->andFilterWhere(['like', 'banktranstype', $this->banktranstype])
            ->andFilterWhere(['like', 'currcode', $this->currcode]);

        return $dataProvider;
    }
}
