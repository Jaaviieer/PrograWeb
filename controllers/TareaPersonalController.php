<?php

namespace app\controllers;

use Yii;
use app\models\TareaPersonal;
use app\models\TareaPersonalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TareaPersonalController implements the CRUD actions for TareaPersonal model.
 */
class TareaPersonalController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all TareaPersonal models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TareaPersonalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TareaPersonal model.
     * @param integer $idtarea_personal
     * @param integer $idTarea
     * @param integer $idPersona
     * @return mixed
     */
    public function actionView($idtarea_personal, $idTarea, $idPersona)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtarea_personal, $idTarea, $idPersona),
        ]);
    }

    /**
     * Creates a new TareaPersonal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TareaPersonal();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtarea_personal' => $model->idtarea_personal, 'idTarea' => $model->idTarea, 'idPersona' => $model->idPersona]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TareaPersonal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idtarea_personal
     * @param integer $idTarea
     * @param integer $idPersona
     * @return mixed
     */
    public function actionUpdate($idtarea_personal, $idTarea, $idPersona)
    {
        $model = $this->findModel($idtarea_personal, $idTarea, $idPersona);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtarea_personal' => $model->idtarea_personal, 'idTarea' => $model->idTarea, 'idPersona' => $model->idPersona]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TareaPersonal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idtarea_personal
     * @param integer $idTarea
     * @param integer $idPersona
     * @return mixed
     */
    public function actionDelete($idtarea_personal, $idTarea, $idPersona)
    {
        $this->findModel($idtarea_personal, $idTarea, $idPersona)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TareaPersonal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idtarea_personal
     * @param integer $idTarea
     * @param integer $idPersona
     * @return TareaPersonal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtarea_personal, $idTarea, $idPersona)
    {
        if (($model = TareaPersonal::findOne(['idtarea_personal' => $idtarea_personal, 'idTarea' => $idTarea, 'idPersona' => $idPersona])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
