<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tramites;

/**
 * TramitesBuscar represents the model behind the search form of `app\models\Tramites`.
 */
class TramitesBuscar extends Tramites
{
    
    public $q;
    private $_q = '';
    
    /**
     * {@inheritdoc}
     */
    
    public function getQ() {
        return $this->_q;
    }
    public function rules()
    {
        return [
            [['id', 'secretarias_id', 'direcciones_id', 'formato', 'silencio_administrativo', 'status', 'usuario_captura', 'usuario_modifica', 'activo'], 'integer'],
            [['nombre_tramite', 'homoclave', 'descripcion_tramite', 'procedimiento_tramite', 'criterios_resolucion', 'formato_archivo', 'tiempo_respuesta_minimo', 'tiempo_respuesta_maximo', 'costo_descripcion', 'vigencia_tramite', 'vigencia_documento', 'tipo_solicitante', 'fundamento_juridico', 'fundamento_juridico_archivo', 'horarios_atencion', 'observaciones', 'fecha', 'fecha_captura', 'fecha_modificacion', 'timestamp'], 'safe'],
            [['costo'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $isset_params = false;
        $query = Tramites::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);
        
        if (isset($params['q']) && $params['q'] != '') {
            $this->_q = trim($params['q']);
            $query->where(
                    'MATCH(tramites.nombre_tramite, tramites.homoclave) AGAINST(:q)',
                    [':q' => $this->_q]
            );
            $isset_params = true;

            //Guardo Busqueda
            $datos = (new \yii\db\Query())
                    ->select(['id', 'nombre_tramite'])
                    ->from('tramites')
                    ->where(['like', 'nombre_tramite', $this->_q])
                    ->all();
            \app\controllers\TramitesController::RegistrarBusqueda($datos);
            //Termina de Guardar Busqueda
        }
        
        if (isset($params['secretaria'])) {
            $this->secretarias_id = $params['secretaria'];
            $query->andWhere(['tramites.secretarias_id' => $this->secretarias_id]);
            $isset_params = true;
        }

       // $this->load($params);

//        if (!$this->validate()) {
//            // uncomment the following line if you do not want to return any records when validation fails
//            // $query->where('0=1');
//            return $dataProvider;
//        }
        
//
//        // grid filtering conditions
//        $query->andFilterWhere([
//            'id' => $this->id,
//            'secretarias_id' => $this->secretarias_id,
//            'direcciones_id' => $this->direcciones_id,
//            'formato' => $this->formato,
//            'silencio_administrativo' => $this->silencio_administrativo,
//            'costo' => $this->costo,
//            'status' => $this->status,
//            'fecha' => $this->fecha,
//            'fecha_captura' => $this->fecha_captura,
//            'usuario_captura' => $this->usuario_captura,
//            'fecha_modificacion' => $this->fecha_modificacion,
//            'usuario_modifica' => $this->usuario_modifica,
//            'timestamp' => $this->timestamp,
//            'activo' => $this->activo,
//        ]);
//
//        $query->andFilterWhere(['like', 'nombre_tramite', $this->nombre_tramite])
//            ->andFilterWhere(['like', 'homoclave', $this->homoclave])
//            ->andFilterWhere(['like', 'descripcion_tramite', $this->descripcion_tramite])
//            ->andFilterWhere(['like', 'procedimiento_tramite', $this->procedimiento_tramite])
//            ->andFilterWhere(['like', 'criterios_resolucion', $this->criterios_resolucion])
//            ->andFilterWhere(['like', 'formato_archivo', $this->formato_archivo])
//            ->andFilterWhere(['like', 'tiempo_respuesta_minimo', $this->tiempo_respuesta_minimo])
//            ->andFilterWhere(['like', 'tiempo_respuesta_maximo', $this->tiempo_respuesta_maximo])
//            ->andFilterWhere(['like', 'costo_descripcion', $this->costo_descripcion])
//            ->andFilterWhere(['like', 'vigencia_tramite', $this->vigencia_tramite])
//            ->andFilterWhere(['like', 'vigencia_documento', $this->vigencia_documento])
//            ->andFilterWhere(['like', 'tipo_solicitante', $this->tipo_solicitante])
//            ->andFilterWhere(['like', 'fundamento_juridico', $this->fundamento_juridico])
//            ->andFilterWhere(['like', 'fundamento_juridico_archivo', $this->fundamento_juridico_archivo])
//            ->andFilterWhere(['like', 'horarios_atencion', $this->horarios_atencion])
//            ->andFilterWhere(['like', 'observaciones', $this->observaciones]);

        return $dataProvider;
    }
}
