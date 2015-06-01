<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\CompanySetup;

/**
 * CompanySetupSearch represents the model behind the search form about `app\modules\setting\Models\CompanySetup`.
 */
class CompanySetupSearch extends CompanySetup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Parameter_ID', 'CompanyName', 'Company_abreviation', 'PostalAddress', 'Residence', 'PhoneAndFax', 'EmailAndWebsite', 'CompanyLogo', 'ReportFooter', 'default_currency', 'loan_computation_method', 'chairman', 'secretary', 'treasurer'], 'safe'],
            [['current_value_per_share'], 'number'],
            [['monthly_rate_for_Basic_method'], 'integer'],
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
        $query = CompanySetup::find();

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
            'current_value_per_share' => $this->current_value_per_share,
            'monthly_rate_for_Basic_method' => $this->monthly_rate_for_Basic_method,
        ]);

        $query->andFilterWhere(['like', 'Parameter_ID', $this->Parameter_ID])
            ->andFilterWhere(['like', 'CompanyName', $this->CompanyName])
            ->andFilterWhere(['like', 'Company_abreviation', $this->Company_abreviation])
            ->andFilterWhere(['like', 'PostalAddress', $this->PostalAddress])
            ->andFilterWhere(['like', 'Residence', $this->Residence])
            ->andFilterWhere(['like', 'PhoneAndFax', $this->PhoneAndFax])
            ->andFilterWhere(['like', 'EmailAndWebsite', $this->EmailAndWebsite])
            ->andFilterWhere(['like', 'CompanyLogo', $this->CompanyLogo])
            ->andFilterWhere(['like', 'ReportFooter', $this->ReportFooter])
            ->andFilterWhere(['like', 'default_currency', $this->default_currency])
            ->andFilterWhere(['like', 'loan_computation_method', $this->loan_computation_method])
            ->andFilterWhere(['like', 'chairman', $this->chairman])
            ->andFilterWhere(['like', 'secretary', $this->secretary])
            ->andFilterWhere(['like', 'treasurer', $this->treasurer]);

        return $dataProvider;
    }
}
