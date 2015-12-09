<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TareaTipo;

/**
 * TareaTipoSearch represents the model behind the search form about `app\models\TareaTipo`.
 */
class TareaTipoSearch extends TareaTipo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtarea_tipo', 'idTareas', 'idTipo'], 'integer'],
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
        $query = TareaTipo::find();

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
            'idtarea_tipo' => $this->idtarea_tipo,
            'idTareas' => $this->idTareas,
            'idTipo' => $this->idTipo,
        ]);

        return $dataProvider;
    }
}
