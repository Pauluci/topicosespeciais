<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Clinica_has_Especialidades".
 *
 * @property int $Clinica_id
 * @property int $Especialidades_id
 * @property string|null $criado_em
 * @property string|null $atualizado_em
 * @property int|null $status
 *
 * @property Clinica $clinica
 * @property Especialidades $especialidades
 */
class ClinicaHasEspecialidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Clinica_has_Especialidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Clinica_id', 'Especialidades_id'], 'required'],
            [['Clinica_id', 'Especialidades_id', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['Clinica_id', 'Especialidades_id'], 'unique', 'targetAttribute' => ['Clinica_id', 'Especialidades_id']],
            [['Clinica_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clinica::className(), 'targetAttribute' => ['Clinica_id' => 'Clinica_id']],
            [['Especialidades_id'], 'exist', 'skipOnError' => true, 'targetClass' => Especialidades::className(), 'targetAttribute' => ['Especialidades_id' => 'Especialidades_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Clinica_id' => Yii::t('app', 'Clinica ID'),
            'Especialidades_id' => Yii::t('app', 'Especialidades ID'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Clinica]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClinica()
    {
        return $this->hasOne(Clinica::className(), ['Clinica_id' => 'Clinica_id']);
    }

    /**
     * Gets query for [[Especialidades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEspecialidades()
    {
        return $this->hasOne(Especialidades::className(), ['Especialidades_id' => 'Especialidades_id']);
    }
}
