<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tramites */

$this->title = 'Create Tramites';
$this->params['breadcrumbs'][] = ['label' => 'Tramites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tramites-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'documentos' => $documentos,
    ]) ?>

</div>
