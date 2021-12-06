<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tramites */
/* @var $form yii\widgets\ActiveForm */
?>

<style>
    .pagination{
        justify-content: center;
    }
    
    .pagination.li.prev{
        color: red;
        width: 15%
    }
</style>
<div class="tramites-form">

     <section class="customer-feedback" id="feedback-section">
        <div class="col-lg-12   ">
            <!--            <div class="col-12 text-center pb-5">
                            <h2>What our customers have to say</h2>
                            <h6 class="section-subtitle text-muted m-0">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
                        </div>-->
            <div class="col-lg-12 ">
                <div class="owl-item  grid-margin ">
                    <div class="card customer-cards ">
                        <div class="card-body" style="padding: 15px 15px 15px 15px !important;">                            
                                <img src="/img/logo_1.png" width="100" alt="" class="" style="    max-width: 100px;float: left;">
                                <span class="com-tagline">&nbsp;&nbsp; <a href="/index.php/tramites/view?id=<?= $model->id ?>"> <?= $model->nombre_tramite ?></a></span>
                                <hr>
                            <div class="text-left">
                                <!--<img src="/theme/images/face2.jpg" width="89" height="89" alt="" class="img-customer">-->
                                <h6 class="card-title pt-3">Descripción:</h6>
                                <p class="m-0 py-3 text-muted text-justify"><?= $model->descripcion_tramite ?></p>
                                <div class="content-divider m-auto" style="background-color: red;"></div>
                                <span class="card-title pt-3">Categoria:</span>
                                <span class="m-0 py-3 text-muted">Nombre categoria</span>
                                <div class="text-left">
                                    <span class="card-title pt-3">Dependencia:</span>
                                <span class="m-0 py-3 text-muted">Nombre dependencia</span>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
        </div>
         
    </section> 

</div>
