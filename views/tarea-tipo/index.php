<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TareaTipoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tarea Tipos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tarea-tipo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tarea Tipo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtarea_tipo',
            'idTareas',
            'idTipo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
