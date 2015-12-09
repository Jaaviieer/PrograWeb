<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TareaPersonal */

$this->title = 'Update Tarea Personal: ' . ' ' . $model->idtarea_personal;
$this->params['breadcrumbs'][] = ['label' => 'Tarea Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtarea_personal, 'url' => ['view', 'idtarea_personal' => $model->idtarea_personal, 'idTarea' => $model->idTarea, 'idPersona' => $model->idPersona]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarea-personal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
