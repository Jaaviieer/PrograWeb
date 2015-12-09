<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Tareas;
use app\models\Personal;

/* @var $this yii\web\View */
/* @var $model app\models\TareaPersonal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarea-personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idTarea')->dropDownList(
    	ArrayHelper::map(Tareas::find()->all(),'idTareas','Tarea'),
    	['prompt'=>'Seleccione Tarea']
    ) ?>

    <?= $form->field($model, 'idPersona')->dropDownList(
    	ArrayHelper::map(Personal::find()->all(),'idPersona','nombre_Persona'),
    	['prompt'=>'Seleccione Persona']
    ) ?>

    <?= $form->field($model, 'fecha_Inicio')->textInput() ?>

    <?= $form->field($model, 'fecha_Fin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
