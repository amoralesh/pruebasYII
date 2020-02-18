<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name')->label('Nombre')  ?>
<?= $form->field($model, 'apellidoP')->label('Apellido Paterno') ?>
<?= $form->field($model, 'apellidoM')->label('Apellido Materno') ?>
<?= $form->field($model, 'edad') ?>
<?= $form->field($model, 'email')->label('Correo Electronico') ?>
<div class="form-group">
<?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>