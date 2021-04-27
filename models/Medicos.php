<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Medico".
 *
 * @property int $Medico_id
 * @property string $CRM
 * @property string|null $Nome
 * @property string|null $Endereco
 * @property string|null $Bairro
 * @property int|null $ibge
 * @property string|null $email
 * @property int|null $tem_clinica
 * @property string|null $site
 * @property string|null $Imagem
 * @property string $criado_em
 * @property string $atualizado_em
 * @property int $status
 */
class Medicos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Medico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CRM'], 'required'],
            [['ibge', 'tem_clinica', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['CRM'], 'string', 'max' => 18],
            [['Nome', 'email'], 'string', 'max' => 80],
            [['Endereco', 'site', 'Imagem'], 'string', 'max' => 145],
            [['Bairro'], 'string', 'max' => 60],
            [['CRM'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Medico_id' => Yii::t('app', 'Medico ID'),
            'CRM' => Yii::t('app', 'Crm'),
            'Nome' => Yii::t('app', 'Nome'),
            'Endereco' => Yii::t('app', 'Endereco'),
            'Bairro' => Yii::t('app', 'Bairro'),
            'ibge' => Yii::t('app', 'Ibge'),
            'email' => Yii::t('app', 'Email'),
            'tem_clinica' => Yii::t('app', 'Tem Clinica'),
            'site' => Yii::t('app', 'Site'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}