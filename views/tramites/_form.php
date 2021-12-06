<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tramites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'secretarias_id')->textInput() ?>

    <?= $form->field($model, 'direcciones_id')->textInput() ?>

    <?= $form->field($model, 'nombre_tramite')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'homoclave')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion_tramite')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'procedimiento_tramite')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'criterios_resolucion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'formato')->textInput() ?>

    <?= $form->field($model, 'formato_archivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiempo_respuesta_minimo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tiempo_respuesta_maximo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'silencio_administrativo')->textInput() ?>

    <?= $form->field($model, 'costo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo_descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vigencia_tramite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vigencia_documento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_solicitante')->dropDownList([ 'ciudadano' => 'Ciudadano', 'empresa' => 'Empresa', 'ciudadano/empresa' => 'Ciudadano/empresa', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fundamento_juridico')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fundamento_juridico_archivo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'horarios_atencion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <?= $form->field($model, 'fecha_captura')->textInput() ?>

    <?= $form->field($model, 'usuario_captura')->textInput() ?>

    <?= $form->field($model, 'fecha_modificacion')->textInput() ?>

    <?= $form->field($model, 'usuario_modifica')->textInput() ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <?= $form->field($model, 'activo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
