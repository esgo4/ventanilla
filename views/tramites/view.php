<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tramites */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tramites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tramites-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'secretarias_id',
            'direcciones_id',
            'nombre_tramite:ntext',
            'homoclave',
            'descripcion_tramite:ntext',
            'procedimiento_tramite:ntext',
            'criterios_resolucion:ntext',
            'formato',
            'formato_archivo',
            'tiempo_respuesta_minimo',
            'tiempo_respuesta_maximo',
            'silencio_administrativo',
            'costo',
            'costo_descripcion:ntext',
            'vigencia_tramite',
            'vigencia_documento',
            'tipo_solicitante',
            'fundamento_juridico:ntext',
            'fundamento_juridico_archivo',
            'horarios_atencion:ntext',
            'observaciones:ntext',
            'status',
            'fecha',
            'fecha_captura',
            'usuario_captura',
            'fecha_modificacion',
            'usuario_modifica',
            'timestamp',
            'activo',
        ],
    ]) ?>

</div>
