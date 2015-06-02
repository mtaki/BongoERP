<?php

namespace app\modules\setting\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\Models\AccountPostingType;

/**
 * AccountPostingTypeSearch represents the model behind the search form about `app\modules\setting\Models\AccountPostingType`.
 */
class AccountPostingTypeSearch extends AccountPostingType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Doc_type_code', 'Doc_type_code_description'], 'safe'],
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
        $query = AccountPostingType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'Doc_type_code', $this->Doc_type_code])
            ->andFilterWhere(['like', 'Doc_type_code_description', $this->Doc_type_code_description]);

        return $dataProvider;
    }
}
