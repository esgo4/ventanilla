<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "direcciones".
 *
 * @property int $id
 * @property int $secretarias_id
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
 * @property JefaturasCoordinadores[] $jefaturasCoordinadores
 * @property Secretarias $secretarias
 * @property Tramites[] $tramites
 */
class Direcciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'direcciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['secretarias_id'], 'required'],
            [['secretarias_id'], 'integer'],
            [['referencia'], 'string'],
            [['nombre', 'encargado', 'puesto', 'horario_atencion', 'dias_atencion', 'telefono', 'extencion', 'correo_electronico', 'colonia', 'direccion', 'latitud', 'longitud', 'fotografia'], 'string', 'max' => 255],
            [['secretarias_id'], 'exist', 'skipOnError' => true, 'targetClass' => Secretarias::className(), 'targetAttribute' => ['secretarias_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'secretarias_id' => 'Secretarias ID',
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
     * Gets query for [[JefaturasCoordinadores]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJefaturasCoordinadores()
    {
        return $this->hasMany(JefaturasCoordinadores::className(), ['direcciones_id' => 'id']);
    }

    /**
     * Gets query for [[Secretarias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSecretarias()
    {
        return $this->hasOne(Secretarias::className(), ['id' => 'secretarias_id']);
    }

    /**
     * Gets query for [[Tramites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTramites()
    {
        return $this->hasMany(Tramites::className(), ['direcciones_id' => 'id']);
    }
}
