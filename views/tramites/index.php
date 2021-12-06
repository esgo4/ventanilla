<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TramitesBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tramites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tramites', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'secretarias_id',
            'direcciones_id',
            'nombre_tramite:ntext',
            'homoclave',
            //'descripcion_tramite:ntext',
            //'procedimiento_tramite:ntext',
            //'criterios_resolucion:ntext',
            //'formato',
            //'formato_archivo',
            //'tiempo_respuesta_minimo',
            //'tiempo_respuesta_maximo',
            //'silencio_administrativo',
            //'costo',
            //'costo_descripcion:ntext',
            //'vigencia_tramite',
            //'vigencia_documento',
            //'tipo_solicitante',
            //'fundamento_juridico:ntext',
            //'fundamento_juridico_archivo',
            //'horarios_atencion:ntext',
            //'observaciones:ntext',
            //'status',
            //'fecha',
            //'fecha_captura',
            //'usuario_captura',
            //'fecha_modificacion',
            //'usuario_modifica',
            //'timestamp',
            //'activo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
