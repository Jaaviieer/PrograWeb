<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TareaPersonal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarea-personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idTarea')->textInput() ?>

    <?= $form->field($model, 'idPersona')->textInput() ?>

    <?= $form->field($model, 'fecha_Inicio')->textInput() ?>

    <?= $form->field($model, 'fecha_Fin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
