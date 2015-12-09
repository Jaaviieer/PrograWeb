<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tipo".
 *
 * @property integer $idTipo
 * @property string $Tipo
 *
 * @property TareaTipo[] $tareaTipos
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Tipo'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTipo' => 'Id Tipo',
            'Tipo' => 'Tipo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareaTipos()
    {
        return $this->hasMany(TareaTipo::className(), ['idTipo' => 'idTipo']);
    }
}
