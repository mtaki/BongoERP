<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\VendorType;

/**
 * VendorTypeSearch represents the model behind the search form about `app\modules\setting\Models\VendorType`.
 */
class VendorTypeSearch extends VendorType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'vendor_sub_gl', 'vendor_type_idd'], 'integer'],
            [['vendor_name', 'vendor_addres', 'vendor_industry', 'vendor_telefone', 'vendors_email', 'vendors_bank', 'vendors_account_no', 'vendors_other_terms'], 'safe'],
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
        $query = VendorType::find();

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
            'vendor_sub_gl' => $this->vendor_sub_gl,
            'vendor_type_idd' => $this->vendor_type_idd,
        ]);

        $query->andFilterWhere(['like', 'vendor_name', $this->vendor_name])
            ->andFilterWhere(['like', 'vendor_addres', $this->vendor_addres])
            ->andFilterWhere(['like', 'vendor_industry', $this->vendor_industry])
            ->andFilterWhere(['like', 'vendor_telefone', $this->vendor_telefone])
            ->andFilterWhere(['like', 'vendors_email', $this->vendors_email])
            ->andFilterWhere(['like', 'vendors_bank', $this->vendors_bank])
            ->andFilterWhere(['like', 'vendors_account_no', $this->vendors_account_no])
            ->andFilterWhere(['like', 'vendors_other_terms', $this->vendors_other_terms]);

        return $dataProvider;
    }
}
