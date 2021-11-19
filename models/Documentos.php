<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documentos".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $cantidad
 *
 * @property Tramites[] $tramites
 */
class Documentos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documentos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre', 'cantidad'], 'string', 'max' => 255],
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
            'cantidad' => 'Cantidad',
        ];
    }

    /**
     * Gets query for [[Tramites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTramites()
    {
        return $this->hasMany(Tramites::className(), ['id_documento' => 'id']);
    }
}
