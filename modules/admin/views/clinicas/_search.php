<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ClinicaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clinica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Clinica_id') ?>

    <?= $form->field($model, 'Nome') ?>

    <?= $form->field($model, 'CEP') ?>

    <?= $form->field($model, 'Endereco') ?>

    <?= $form->field($model, 'Bairro') ?>

    <?php // echo $form->field($model, 'Cidade') ?>

    <?php // echo $form->field($model, 'UF') ?>

    <?php // echo $form->field($model, 'ibge') ?>

    <?php // echo $form->field($model, 'Imagem') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telefone') ?>

    <?php // echo $form->field($model, 'criado_em') ?>

    <?php // echo $form->field($model, 'atualizado_em') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
