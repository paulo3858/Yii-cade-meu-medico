<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Especialidades".
 *
 * @property int $Especialidades_id
 * @property string $titulo
 * @property string|null $SubTitulo
 * @property string|null $texto
 * @property string|null $Imagem
 * @property string $criado_em
 * @property string|null $atualizado_em
 * @property int $status
 */
class Especialidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Especialidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['texto'], 'string'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['status'], 'integer'],
            [['titulo'], 'string', 'max' => 60],
            [['SubTitulo'], 'string', 'max' => 255],
            [['Imagem'], 'string', 'max' => 145],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Especialidades_id' => Yii::t('app', 'Especialidades ID'),
            'titulo' => Yii::t('app', 'Titulo'),
            'SubTitulo' => Yii::t('app', 'Sub-titulo'),
            'texto' => Yii::t('app', 'Texto'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
