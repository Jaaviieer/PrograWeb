<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarea_tipo".
 *
 * @property integer $idtarea_tipo
 * @property integer $idTareas
 * @property integer $idTipo
 *
 * @property Tareas $idTareas0
 * @property Tipo $idTipo0
 */
class TareaTipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarea_tipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtarea_tipo'], 'required'],
            [['idtarea_tipo', 'idTareas', 'idTipo'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtarea_tipo' => 'Idtarea Tipo',
            'idTareas' => 'Id Tareas',
            'idTipo' => 'Id Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTareas0()
    {
        return $this->hasOne(Tareas::className(), ['idTareas' => 'idTareas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipo0()
    {
        return $this->hasOne(Tipo::className(), ['idTipo' => 'idTipo']);
    }
}
