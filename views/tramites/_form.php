<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\models\Tramites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tramites-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requisitos')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'id_documento')->widget(Select2::classname(), [
        'language' => 'es',
        'data' => $documentos,
        'options' => [
            'placeholder' => 'Selecciona paciente ...',
            'id' => 'paciente_select'
        ],
        'pluginOptions' => [
//            'ajax' => [
//                'url' => Url::to(['/citas/pacientes']),
//                'dataType' => 'json',
//                'data' => new \yii\web\JsExpression('function(params) { return {q:params.term}; }')
//            ],
            'allowClear' => true,
        ],
    ]);
    ?>

        <?= $form->field($model, 'limite')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
