<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tramites_buscados".
 *
 * @property int $id
 * @property int $tramites_id
 * @property string|null $ip
 * @property string|null $fecha
 * @property string|null $datetime
 *
 * @property Tramites $tramites
 */
class TramitesBuscados extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tramites_buscados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tramites_id'], 'required'],
            [['tramites_id'], 'integer'],
            [['fecha', 'datetime'], 'safe'],
            [['ip'], 'string', 'max' => 255],
            [['tramites_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tramites::className(), 'targetAttribute' => ['tramites_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tramites_id' => 'Tramites ID',
            'ip' => 'Ip',
            'fecha' => 'Fecha',
            'datetime' => 'Datetime',
        ];
    }

    /**
     * Gets query for [[Tramites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTramites()
    {
        return $this->hasOne(Tramites::className(), ['id' => 'tramites_id']);
    }
}
