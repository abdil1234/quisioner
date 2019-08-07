<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usulan;

/**
 * UsulanSearch represents the model behind the search form about `app\models\Usulan`.
 */
class UsulanSearch extends Usulan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'file_id'], 'integer'],
            [['nama', 'jenis_kelamin', 'tgl_lahir', 'alamat', 'kritik', 'saran', 'waktu', 'kd_lingkungan'], 'safe'],
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
        $query = Usulan::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'waktu' => $this->waktu,
            'file_id' => $this->file_id,
            'kd_lingkungan' => $this->kd_lingkungan,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kritik', $this->kritik])
            ->andFilterWhere(['like', 'saran', $this->saran]);

        return $dataProvider;
    }
}
