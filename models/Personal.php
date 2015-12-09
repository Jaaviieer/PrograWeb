<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Personal".
 *
 * @property integer $idPersona
 * @property string $nombre_Persona
 * @property string $imagen
 *
 * @property TareaPersonal[] $tareaPersonals
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imagen'], 'string'],
            [['nombre_Persona'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPersona' => 'Id Persona',
            'nombre_Persona' => 'Nombre  Persona',
            'imagen' => 'Imagen',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareaPersonals()
    {
        return $this->hasMany(TareaPersonal::className(), ['idPersona' => 'idPersona']);
    }
}
