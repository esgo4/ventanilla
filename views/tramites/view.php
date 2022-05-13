<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tramites */

$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Tramites', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<style>
    .backB{

        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        padding: 83px 0 68px;  
        background-image: url(/img/work1.png);

    }




</style>
<div class="container">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->
    <section class="contact-us " >
        <div class=" grid-margin backB" style="   border-radius: 10px; " >
            <div class="pb-4">
                <h3 class="px-3 px-md-0 m-0" data-aos="fade-down" style="    color: white;">Información del trámite</h3>
                <!--<h4 class="pt-1" data-aos="fade-down">Contact us</h4>-->
            </div>
            <!--            <div data-aos="fade-up">
                            <button class="btn btn-rounded btn-outline-danger">Contact us</button>
                        </div>          -->
        </div>
       
    </section>

<!--    <section>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                            Collapsible Group 1</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                            Collapsible Group 2</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                            Collapsible Group 3</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.</div>
                </div>
            </div>
        
    </section>-->



    <?=
    DetailView::widget([
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
    ])
    ?>

</div>
