<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TareaPersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tarea Personals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarea-personal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tarea Personal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtarea_personal',
            'idTarea',
            'idPersona',
            'fecha_Inicio',
            'fecha_Fin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
