<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\DbCrPaymentmethod;

/**
 * DbCrPaymentmethodSearch represents the model behind the search form about `app\modules\setting\Models\DbCrPaymentmethod`.
 */
class DbCrPaymentmethodSearch extends DbCrPaymentmethod
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['paymentid', 'paymenttype', 'receipttype', 'usepreprintedstationery', 'opencashdrawer'], 'integer'],
            [['paymentname'], 'safe'],
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
        $query = DbCrPaymentmethod::find();

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
            'paymentid' => $this->paymentid,
            'paymenttype' => $this->paymenttype,
            'receipttype' => $this->receipttype,
            'usepreprintedstationery' => $this->usepreprintedstationery,
            'opencashdrawer' => $this->opencashdrawer,
        ]);

        $query->andFilterWhere(['like', 'paymentname', $this->paymentname]);

        return $dataProvider;
    }
}
