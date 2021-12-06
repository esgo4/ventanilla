<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\select2\Select2;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TramitesBuscar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tramites encontrados: '. $dataProvider->getTotalCount();
//$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .busque{
        border: 2px solid #a3a0a0;
        border-radius: 15px;
    }
    
    .pad{
        padding: 4%;
    }
</style>
<div class="container">

    <h1 style="margin-top: 4%;
    margin-bottom: 4%;"><?= Html::encode($this->title) ?></h1>

    <section class="contact-us" id="contact-section">
        <div class=" grid busque" >
            <?= Html::beginForm(['/tramites/busqueda'], 'get') ?>
            <div class="input-group pad">
                <div class="col-lg-6">  
                    <?= Html::textInput('q', '', ['placeholder' => 'Nueva busqueda', 'class' => 'form-control']) ?>
                </div>
                <div class="col-lg-2" style="    text-align: center; ">  
                    <button type="submit" class="btn  btn-success" style="width: 65%">Buscar</button>
                </div>
                <?= Html::endForm() ?>
                <div class="col-lg-4">  
                    <?= Html::beginForm(['/tramites/busqueda'], 'get') ?>                                
                            <?=
                            Select2::widget([
                                'name' => 'secretaria',
                                'hideSearch' => true,
                                'data' => $secretarias,
                                'options' => [
                                    'placeholder' => 'Dependencia ...',
                                    'onchange' => 'this.form.submit()',
                                ],
                            ]);
                            ?>

                             
                </div>
                	
                
            </div>
            
            <?= Html::endForm() ?>                     
        </div>
    </section>
    <br>
    <br>
   
    
    <?php
    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'itemView' => '_post',
        'itemOptions' => ['class' => 'listview-item'],
        'pager' => [
            'class' => \yii\bootstrap4\LinkPager::class,
        ],
        
    ]);
    
    ?>


    <br><br><br>
    

</div>
