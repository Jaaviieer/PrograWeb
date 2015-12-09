<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TareaPersonalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarea-personal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idtarea_personal') ?>

    <?= $form->field($model, 'idTarea') ?>

    <?= $form->field($model, 'idPersona') ?>

    <?= $form->field($model, 'fecha_Inicio') ?>

    <?= $form->field($model, 'fecha_Fin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
