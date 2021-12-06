<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "secretarias".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $encargado
 * @property string|null $puesto
 * @property string|null $horario_atencion
 * @property string|null $dias_atencion
 * @property string|null $telefono
 * @property string|null $extencion
 * @property string|null $correo_electronico
 * @property string|null $colonia
 * @property string|null $direccion
 * @property string|null $referencia
 * @property string|null $latitud
 * @property string|null $longitud
 * @property string|null $fotografia
 *
 * @property Direcciones[] $direcciones
 * @property JefaturasCoordinadores[] $jefaturasCoordinadores
 * @property Tramites[] $tramites
 * @property User[] $users
 */
class Secretarias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'secretarias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['referencia'], 'string'],
            [['nombre', 'encargado', 'puesto', 'horario_atencion', 'dias_atencion', 'telefono', 'extencion', 'correo_electronico', 'colonia', 'direccion', 'latitud', 'longitud', 'fotografia'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'encargado' => 'Encargado',
            'puesto' => 'Puesto',
            'horario_atencion' => 'Horario Atencion',
            'dias_atencion' => 'Dias Atencion',
            'telefono' => 'Telefono',
            'extencion' => 'Extencion',
            'correo_electronico' => 'Correo Electronico',
            'colonia' => 'Colonia',
            'direccion' => 'Direccion',
            'referencia' => 'Referencia',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'fotografia' => 'Fotografia',
        ];
    }

    /**
     * Gets query for [[Direcciones]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirecciones()
    {
        return $this->hasMany(Direcciones::className(), ['secretarias_id' => 'id']);
    }

    /**
     * Gets query for [[JefaturasCoordinadores]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJefaturasCoordinadores()
    {
        return $this->hasMany(JefaturasCoordinadores::className(), ['secretarias_id' => 'id']);
    }

    /**
     * Gets query for [[Tramites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTramites()
    {
        return $this->hasMany(Tramites::className(), ['secretarias_id' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['secretarias_id' => 'id']);
    }
}
