<?php

namespace app\modules\setting\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\setting\models\UserMenu;

/**
 * UserMenuSearch represents the model behind the search form about `app\modules\setting\models\UserMenu`.
 */
class UserMenuSearch extends UserMenu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'linked_role'], 'integer'],
            [['menu_code', 'Menu_name', 'menu_category', 'menu_link'], 'safe'],
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
        $query = UserMenu::find();

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
            'linked_role' => $this->linked_role,
        ]);

        $query->andFilterWhere(['like', 'menu_code', $this->menu_code])
            ->andFilterWhere(['like', 'Menu_name', $this->Menu_name])
            ->andFilterWhere(['like', 'menu_category', $this->menu_category])
            ->andFilterWhere(['like', 'menu_link', $this->menu_link]);

        return $dataProvider;
    }
}
