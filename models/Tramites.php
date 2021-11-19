<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tramites".
 *
 * @property int $id
 * @property string $nombre
 * @property string $requisitos
 * @property string|null $limite
 * @property int|null $id_documento
 *
 * @property Documentos $documento
 */
class Tramites extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tramites';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'requisitos'], 'required'],
            [['id_documento'], 'integer'],
            [['nombre', 'requisitos', 'limite'], 'string', 'max' => 255],
            [['id_documento'], 'exist', 'skipOnError' => true, 'targetClass' => Documentos::className(), 'targetAttribute' => ['id_documento' => 'id']],
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
            'requisitos' => 'Requisitos',
            'limite' => 'Limite',
            'id_documento' => 'Id Documento',
        ];
    }

    /**
     * Gets query for [[Documento]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocumento()
    {
        return $this->hasOne(Documentos::className(), ['id' => 'id_documento']);
    }
}
