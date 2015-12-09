<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarea_personal".
 *
 * @property integer $idtarea_personal
 * @property integer $idTarea
 * @property integer $idPersona
 * @property string $fecha_Inicio
 * @property string $fecha_Fin
 *
 * @property Personal $idPersona0
 * @property Tareas $idTarea0
 */
class TareaPersonal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarea_personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTarea', 'idPersona'], 'required'],
            [['idTarea', 'idPersona'], 'integer'],
            [['fecha_Inicio', 'fecha_Fin'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtarea_personal' => 'Idtarea Personal',
            'idTarea' => 'Id Tarea',
            'idPersona' => 'Id Persona',
            'fecha_Inicio' => 'Fecha  Inicio',
            'fecha_Fin' => 'Fecha  Fin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPersona0()
    {
        return $this->hasOne(Personal::className(), ['idPersona' => 'idPersona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTarea0()
    {
        return $this->hasOne(Tareas::className(), ['idTareas' => 'idTarea']);
    }
}
