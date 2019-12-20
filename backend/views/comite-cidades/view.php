<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ComiteCidades */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Comite Cidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comite-cidades-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
         //   'id',
            'cProvincial.name',
            'name',
            'description',
         /*   'criado_por',
            'actualizado_por',
            'criado_em',
            'actualizado_em',
            'user_location',
            'user_location2',*/
        ],
    ]) ?>

       <p> <?= Html::a('<i class="glyphicon glyphicon-home"></i>', ['comite-cidades/index'], ['class' => 'btn btn-danger']) ?>  
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-remove"></i> Remover', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>