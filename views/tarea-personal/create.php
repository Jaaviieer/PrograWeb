<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TareaPersonal */

$this->title = 'Create Tarea Personal';
$this->params['breadcrumbs'][] = ['label' => 'Tarea Personals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarea-personal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
