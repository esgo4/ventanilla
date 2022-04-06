<?php

use yii\helpers\Html;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="banner" style="background-image: url('/img/pexels-do.jpg');height: 800px;background-position: center;background-repeat: no-repeat;  background-size: cover;">
    <div class="content-wrapper">        
        <div class="content-header">
            <div class="jumbotron text-center bg-transparent" style="background-color: rgba(0, 0, 0, 0.5) !important; margin-left: 15%;
                 margin-right: 15%;
                 margin-top: 8%;">
                <h1 class="font-weight-semibold " style="color: white">Escribe el trámite o servicio<br>
                    que deseas realizar:</h1>

                <div class="content-wrapper"> 
                    <div class="content-header" style="    text-align: -webkit-center;">
                         <?= Html::beginForm(['/tramites/busqueda'], 'get') ?>
                        <div class="col-lg-6">                        
                            <?= Html::textInput('q', '', ['placeholder' => 'Nombre o Palabra que describa el trámite.', 'class' => 'form-control']) ?>	
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">                      
                        <button type="submit" class="btn  btn-success">Buscar</button>                        
                    </div>
                </div>
                <?= Html::endForm() ?>
                <br>
                <div class="content-wrapper"> 
                    <div class="content-header" style="    text-align: -webkit-center;">
                        <h4 class="section-subtitle " style="color: white" >Por dependencia o secretaría:</h4>
                        <div class="col-lg-5">     


                            <?= Html::beginForm(['/tramites/busqueda'], 'get') ?>                                
                            <?=
                            Select2::widget([
                                'name' => 'secretaria',
                                'hideSearch' => true,
                                'data' => $secretarias,
                                'options' => [
                                    'placeholder' => 'Seleccionar ...',
                                    'onchange' => 'this.form.submit()',
                                ],
                            ]);
                            ?>

                            <?= Html::endForm() ?> 
                        </div>
                    </div>
                </div>
            </div>             
        </div>               
    </div>
</div>
<div class="container">
    <section class="features-overview" id="features-section" >
        <div class="content-header">
            <h2>Trámites más buscados</h2>
            <!--<h6 class="section-subtitle text-muted">One theme that serves as an easy-to-use operational toolkit<br>that meets customer's needs.</h6>-->
        </div>       
    </section> 
    <section class="customer-feedback" id="feedback-section">
        <div class="row">
            <!--            <div class="col-12 text-center pb-5">
                            <h2>What our customers have to say</h2>
                            <h6 class="section-subtitle text-muted m-0">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
                        </div>-->
            <?php foreach ($masbuscados as $buscados) { ?>
            <div class="col-lg-6">
                <div class="owl-item  grid-margin">
                    <div class="card customer-cards">
                        <div class="card-body" style="padding: 15px 15px 15px 15px !important;">                            
                                <img src="/img/logo_1.png" width="100" alt="" class="" style="    max-width: 100px;float: left;">
                                <span class="com-tagline" >&nbsp;&nbsp;<a href="/index.php/tramites/view?id=<?= $buscados->tramites->id ?>" style="text-align: justify"><?= mb_strtoupper( $buscados->tramites->nombre_tramite,"utf-8") ?></a></span>
                                <hr>
                            <div class="text-left">
                                <!--<img src="/theme/images/face2.jpg" width="89" height="89" alt="" class="img-customer">-->
                                <h6 class="card-title pt-3">Descripción:</h6>
                                <p class=" text-justify" style="font-size: 15pt;font-family: arial"><?= $buscados->tramites->descripcion_tramite ?></p>
                                <div class="content-divider m-auto" style="background-color: red;"></div>
                                <span class="card-title pt-3">Categoria:</span>
                                <span class="m-0 py-3 text-muted"><?= $buscados->tramites->homoclave ?></span>
                                <div class="text-left">
                                    <span class="card-title pt-3">Dependencia:</span>
                                <span class="m-0 py-3 text-muted"><?= $buscados->tramites->secretarias->nombre ?></span>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <?php } ?>
        </div>
         
    </section> 
     <section class="case-studies" id="case-studies-section">
        <div class="row grid-margin text-center" style="justify-content: center">
            <div class="col-12 text-center pb-5">
                <h2>Estadísticas</h2>
                <!--<h6 class="section-subtitle text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>-->
            </div>
            <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
                <div class="card color-cards">
                    <div class="card-body p-0">
                        <div class="bg-primary text-center card-contents">
                            <div class="card-image">
                                <img src="/img/oficina.png" class="case-studies-card-img" alt="">
                            </div>  
                            <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                    <h1 class="text-white pb-2 px-3" style="    font-size: 40pt;">17</h1>
                                    <!--<button class="btn btn-white">Read More</button>-->
                                </div>
                            </div>
                        </div>   
                        <div class="card-details text-center pt-4">
                            <h6 class="m-0 pb-1">Secretarías</h6>
                            <!--<p>Seo, Marketing</p>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="card color-cards">
                    <div class="card-body p-0">
                        <div class="bg-warning text-center card-contents">
                            <div class="card-image">
                                <img src="/img/carpeta.png" class="case-studies-card-img" alt="">
                            </div>  
                            <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                    <h6 class="text-white pb-2 px-3" style="    font-size: 40pt;">314</h6>
                                    <!--<button class="btn btn-white">Read More</button>-->
                                </div>
                            </div>
                        </div>   
                        <div class="card-details text-center pt-4">
                            <h6 class="m-0 pb-1">Tramites</h6>
                            <!--<p>Developing, Designing</p>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                <div class="card color-cards">
                    <div class="card-body p-0">
                        <div class="bg-violet text-center card-contents">
                            <div class="card-image">
                                <img src="/img/search.png" class="case-studies-card-img" alt="">
                            </div>  
                            <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                    <h6 class="text-white pb-2 px-3" style="    font-size: 40pt;">675</h6>
                                    <!--<button class="btn btn-white">Read More</button>-->
                                </div>
                            </div>
                        </div>   
                        <div class="card-details text-center pt-4">
                            <h6 class="m-0 pb-1">Busquedas</h6>
                            <!--<p>Designing, Developing</p>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
                <div class="card color-cards">
                    <div class="card-body p-0">
                        <div class="bg-success text-center card-contents">
                            <div class="card-image">
                                <img src="/img/prueba-en-linea.png" class="case-studies-card-img" alt="">
                            </div>  
                            <div class="card-desc-box d-flex align-items-center justify-content-around">
                                <div>
                                    <h6 class="text-white pb-2 px-3" style="    font-size: 40pt;">10</h6>
                                    <!--<button class="btn btn-white">Read More</button>-->
                                </div>
                            </div>
                        </div>   
                        <div class="card-details text-center pt-4">
                            <h6 class="m-0 pb-1">Trámites en línea</h6>
                            <!--<p>Developing, Designing</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    <section class="digital-marketing-service" id="digital-marketing-section">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
                <h3 class="m-0">We Offer a Full Range<br>of Digital Marketing Services!</h3>
                <div class="col-lg-7 col-xl-6 p-0">
                    <p class="py-4 m-0 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                    <p class="font-weight-medium text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer</p>
                </div>    
            </div>
            <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
                <img src="/theme/images/Group1.png" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
                <img src="/theme/images/Group2.png" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
                <h3 class="m-0">Leading Digital Agency<br>for  Business Solution.</h3>
                <div class="col-lg-9 col-xl-8 p-0">
                    <p class="py-4 m-0 text-muted">Power-packed with impressive features and well-optimized, this template is designed to provide the best performance in all circumstances.</p>
                    <p class="pb-2 font-weight-medium text-muted">Its smart features make it a powerful stand-alone website building tool.</p>
                </div>
                <button class="btn btn-info">Readmore</button>
            </div>
        </div>
    </section>     
     
    <section class="customer-feedback" id="feedback-section">
        <div class="row">
            <div class="col-12 text-center pb-5">
                <h2>What our customers have to say</h2>
                <h6 class="section-subtitle text-muted m-0">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
            </div>
            <div class="owl-carousel owl-theme grid-margin">
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/theme/images/face2.jpg" width="89" height="89" alt="" class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Tony Martinez</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/theme/images/face3.jpg" width="89" height="89" alt="" class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Sophia Armstrong</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/theme/images/face20.jpg" width="89" height="89" alt="" class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Cody Lambert</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/theme/images/face15.jpg" width="89" height="89" alt="" class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Cody Lambert</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/theme/images/face16.jpg" width="89" height="89" alt="" class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Cody Lambert</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/theme/images/face1.jpg" width="89" height="89" alt="" class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Tony Martinez</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/theme/images/face2.jpg" width="89" height="89" alt="" class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Tony Martinez</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/theme/images/face3.jpg" width="89" height="89" alt="" class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Sophia Armstrong</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
                <div class="card customer-cards">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="/theme/images/face20.jpg" width="89" height="89" alt="" class="img-customer">
                            <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                            <div class="content-divider m-auto"></div>
                            <h6 class="card-title pt-3">Cody Lambert</h6>
                            <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us" id="contact-section">
        <div class="contact-us-bgimage grid-margin" >
            <div class="pb-4">
                <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Do you have any projects?</h4>
                <h4 class="pt-1" data-aos="fade-down">Contact us</h4>
            </div>
            <div data-aos="fade-up">
                <button class="btn btn-rounded btn-outline-danger">Contact us</button>
            </div>          
        </div>
    </section>

</div>
