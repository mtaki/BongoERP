<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\GlFixedAssetsType;

/**
 * GlFixedAssetsTypeSearch represents the model behind the search form about `app\modules\setting\models\GlFixedAssetsType`.
 */
class GlFixedAssetsTypeSearch extends GlFixedAssetsType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sub_ledger_no', 'mapped_gl_account'], 'integer'],
            [['name', 'remarks'], 'safe'],
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
        $query = GlFixedAssetsType::find();

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
            'sub_ledger_no' => $this->sub_ledger_no,
            'mapped_gl_account' => $this->mapped_gl_account,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
