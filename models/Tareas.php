<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PrograWeb.Tareas".
 *
 * @property integer $idTareas
 * @property string $Tarea
 */
class Tareas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PrograWeb.Tareas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tarea'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTareas' => 'Id Tareas',
            'Tarea' => 'Tarea',
        ];
    }
}
