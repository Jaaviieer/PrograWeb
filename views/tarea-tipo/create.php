<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TareaTipo */

$this->title = 'Create Tarea Tipo';
$this->params['breadcrumbs'][] = ['label' => 'Tarea Tipos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarea-tipo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
