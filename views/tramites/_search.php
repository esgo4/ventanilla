<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TramitesBuscar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'secretarias_id') ?>

    <?= $form->field($model, 'direcciones_id') ?>

    <?= $form->field($model, 'nombre_tramite') ?>

    <?= $form->field($model, 'homoclave') ?>

    <?php // echo $form->field($model, 'descripcion_tramite') ?>

    <?php // echo $form->field($model, 'procedimiento_tramite') ?>

    <?php // echo $form->field($model, 'criterios_resolucion') ?>

    <?php // echo $form->field($model, 'formato') ?>

    <?php // echo $form->field($model, 'formato_archivo') ?>

    <?php // echo $form->field($model, 'tiempo_respuesta_minimo') ?>

    <?php // echo $form->field($model, 'tiempo_respuesta_maximo') ?>

    <?php // echo $form->field($model, 'silencio_administrativo') ?>

    <?php // echo $form->field($model, 'costo') ?>

    <?php // echo $form->field($model, 'costo_descripcion') ?>

    <?php // echo $form->field($model, 'vigencia_tramite') ?>

    <?php // echo $form->field($model, 'vigencia_documento') ?>

    <?php // echo $form->field($model, 'tipo_solicitante') ?>

    <?php // echo $form->field($model, 'fundamento_juridico') ?>

    <?php // echo $form->field($model, 'fundamento_juridico_archivo') ?>

    <?php // echo $form->field($model, 'horarios_atencion') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'fecha_captura') ?>

    <?php // echo $form->field($model, 'usuario_captura') ?>

    <?php // echo $form->field($model, 'fecha_modificacion') ?>

    <?php // echo $form->field($model, 'usuario_modifica') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <?php // echo $form->field($model, 'activo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
