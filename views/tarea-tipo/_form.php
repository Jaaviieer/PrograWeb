<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Tareas;
use app\models\Tipo;

/* @var $this yii\web\View */
/* @var $model app\models\TareaTipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarea-tipo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idtarea_tipo')->textInput() ?>

    <?= $form->field($model, 'idTareas')->dropDownList(
    	ArrayHelper::map(Tareas::find()->all(),'idTareas','Tarea'),
    	['prompt'=>'Seleccione Tarea']
    ) ?>

    <?= $form->field($model, 'idTipo')->dropDownList(
    	ArrayHelper::map(Tipo::find()->all(),'idTipo','Tipo'),
    	['prompt'=>'Seleccione Tipo']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
