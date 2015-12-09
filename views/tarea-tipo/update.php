<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TareaTipo */

$this->title = 'Update Tarea Tipo: ' . ' ' . $model->idtarea_tipo;
$this->params['breadcrumbs'][] = ['label' => 'Tarea Tipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtarea_tipo, 'url' => ['view', 'id' => $model->idtarea_tipo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarea-tipo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
