<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TareaPersonal */

$this->title = $model->idtarea_personal;
$this->params['breadcrumbs'][] = ['label' => 'Tarea Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarea-personal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idtarea_personal' => $model->idtarea_personal, 'idTarea' => $model->idTarea, 'idPersona' => $model->idPersona], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idtarea_personal' => $model->idtarea_personal, 'idTarea' => $model->idTarea, 'idPersona' => $model->idPersona], [
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
            'idtarea_personal',
            'idTarea',
            'idPersona',
            'fecha_Inicio',
            'fecha_Fin',
        ],
    ]) ?>

</div>
