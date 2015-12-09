<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TareaTipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarea-tipo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idtarea_tipo')->textInput() ?>

    <?= $form->field($model, 'idTareas')->textInput() ?>

    <?= $form->field($model, 'idTipo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
