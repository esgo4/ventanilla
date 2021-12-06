<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tramites".
 *
 * @property int $id
 * @property int|null $secretarias_id
 * @property int|null $direcciones_id
 * @property string|null $nombre_tramite
 * @property string|null $homoclave
 * @property string|null $descripcion_tramite
 * @property string|null $procedimiento_tramite
 * @property string|null $criterios_resolucion
 * @property int|null $formato
 * @property string|null $formato_archivo
 * @property string|null $tiempo_respuesta_minimo
 * @property string|null $tiempo_respuesta_maximo
 * @property int|null $silencio_administrativo
 * @property float|null $costo
 * @property string|null $costo_descripcion
 * @property string|null $vigencia_tramite
 * @property string|null $vigencia_documento
 * @property string|null $tipo_solicitante
 * @property string|null $fundamento_juridico
 * @property string|null $fundamento_juridico_archivo
 * @property string|null $horarios_atencion
 * @property string|null $observaciones
 * @property int|null $status
 * @property string|null $fecha
 * @property string|null $fecha_captura
 * @property int|null $usuario_captura
 * @property string|null $fecha_modificacion
 * @property int|null $usuario_modifica
 * @property string|null $timestamp
 * @property int|null $activo
 *
 * @property ComentariosAdmin[] $comentariosAdmins
 * @property Direcciones $direcciones
 * @property InformacionUtil[] $informacionUtils
 * @property ModulosCobroTramites[] $modulosCobroTramites
 * @property ModulosCobro[] $modulosCobros
 * @property Notificaciones[] $notificaciones
 * @property Requisitos[] $requisitos
 * @property RequisitosAdicionales[] $requisitosAdicionales
 * @property Secretarias $secretarias
 * @property TramitesAceptados[] $tramitesAceptados
 * @property TramitesBuscados[] $tramitesBuscados
 * @property User $usuarioCaptura
 * @property User $usuarioModifica
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
            [['secretarias_id', 'direcciones_id', 'formato', 'silencio_administrativo', 'status', 'usuario_captura', 'usuario_modifica', 'activo'], 'integer'],
            [['nombre_tramite', 'descripcion_tramite', 'procedimiento_tramite', 'criterios_resolucion', 'costo_descripcion', 'tipo_solicitante', 'fundamento_juridico', 'horarios_atencion', 'observaciones'], 'string'],
            [['costo'], 'number'],
            [['fecha', 'fecha_captura', 'fecha_modificacion', 'timestamp'], 'safe'],
            [['homoclave'], 'string', 'max' => 45],
            [['formato_archivo', 'tiempo_respuesta_minimo', 'tiempo_respuesta_maximo', 'vigencia_tramite', 'vigencia_documento', 'fundamento_juridico_archivo'], 'string', 'max' => 255],
            [['direcciones_id'], 'exist', 'skipOnError' => true, 'targetClass' => Direcciones::className(), 'targetAttribute' => ['direcciones_id' => 'id']],
            [['secretarias_id'], 'exist', 'skipOnError' => true, 'targetClass' => Secretarias::className(), 'targetAttribute' => ['secretarias_id' => 'id']],
            [['usuario_captura'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['usuario_captura' => 'id']],
            [['usuario_modifica'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['usuario_modifica' => 'id']],
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
            'direcciones_id' => 'Direcciones ID',
            'nombre_tramite' => 'Nombre Tramite',
            'homoclave' => 'Homoclave',
            'descripcion_tramite' => 'Descripcion Tramite',
            'procedimiento_tramite' => 'Procedimiento Tramite',
            'criterios_resolucion' => 'Criterios Resolucion',
            'formato' => 'Formato',
            'formato_archivo' => 'Formato Archivo',
            'tiempo_respuesta_minimo' => 'Tiempo Respuesta Minimo',
            'tiempo_respuesta_maximo' => 'Tiempo Respuesta Maximo',
            'silencio_administrativo' => 'Silencio Administrativo',
            'costo' => 'Costo',
            'costo_descripcion' => 'Costo Descripcion',
            'vigencia_tramite' => 'Vigencia Tramite',
            'vigencia_documento' => 'Vigencia Documento',
            'tipo_solicitante' => 'Tipo Solicitante',
            'fundamento_juridico' => 'Fundamento Juridico',
            'fundamento_juridico_archivo' => 'Fundamento Juridico Archivo',
            'horarios_atencion' => 'Horarios Atencion',
            'observaciones' => 'Observaciones',
            'status' => 'Status',
            'fecha' => 'Fecha',
            'fecha_captura' => 'Fecha Captura',
            'usuario_captura' => 'Usuario Captura',
            'fecha_modificacion' => 'Fecha Modificacion',
            'usuario_modifica' => 'Usuario Modifica',
            'timestamp' => 'Timestamp',
            'activo' => 'Activo',
        ];
    }

    /**
     * Gets query for [[ComentariosAdmins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComentariosAdmins()
    {
        return $this->hasMany(ComentariosAdmin::className(), ['tramites_id' => 'id']);
    }

    /**
     * Gets query for [[Direcciones]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirecciones()
    {
        return $this->hasOne(Direcciones::className(), ['id' => 'direcciones_id']);
    }

    /**
     * Gets query for [[InformacionUtils]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformacionUtils()
    {
        return $this->hasMany(InformacionUtil::className(), ['tramites_id' => 'id']);
    }

    /**
     * Gets query for [[ModulosCobroTramites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModulosCobroTramites()
    {
        return $this->hasMany(ModulosCobroTramites::className(), ['tramites_id' => 'id']);
    }

    /**
     * Gets query for [[ModulosCobros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModulosCobros()
    {
        return $this->hasMany(ModulosCobro::className(), ['id' => 'modulos_cobro_id'])->viaTable('modulos_cobro_tramites', ['tramites_id' => 'id']);
    }

    /**
     * Gets query for [[Notificaciones]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotificaciones()
    {
        return $this->hasMany(Notificaciones::className(), ['tramites_id' => 'id']);
    }

    /**
     * Gets query for [[Requisitos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRequisitos()
    {
        return $this->hasMany(Requisitos::className(), ['tramites_id' => 'id']);
    }

    /**
     * Gets query for [[RequisitosAdicionales]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRequisitosAdicionales()
    {
        return $this->hasMany(RequisitosAdicionales::className(), ['tramites_id' => 'id']);
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
     * Gets query for [[TramitesAceptados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTramitesAceptados()
    {
        return $this->hasMany(TramitesAceptados::className(), ['tramites_id' => 'id']);
    }

    /**
     * Gets query for [[TramitesBuscados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTramitesBuscados()
    {
        return $this->hasMany(TramitesBuscados::className(), ['tramites_id' => 'id']);
    }

    /**
     * Gets query for [[UsuarioCaptura]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioCaptura()
    {
        return $this->hasOne(User::className(), ['id' => 'usuario_captura']);
    }

    /**
     * Gets query for [[UsuarioModifica]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioModifica()
    {
        return $this->hasOne(User::className(), ['id' => 'usuario_modifica']);
    }
}
