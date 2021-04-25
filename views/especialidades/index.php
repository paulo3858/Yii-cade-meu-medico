<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>especialidades</h1>
<?php $form = ActiveForm::begin(); ?>
<?php echo $form->errorSummary($Vmodel); ?>

    <?= $form->field($Vmodel, 'titulo') ?>
    <?= $form->field($Vmodel, 'SubTitulo') ?>
    <?= $form->field($Vmodel, 'texto')->textarea() ?>
    <?= Html::submitButton("Enviar",['class' => 'btn btn-success']) ?> 

<?php ActiveForm::end(); ?>


