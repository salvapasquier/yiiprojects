<h1>Editar tarea</h1>
<?php $form = $this->beginWidget('CActiveForm'); ?>
<div>
    <?php echo $form->labelEx($model, 'nombre'); ?>
    <?php echo $form->textField($model, 'nombre'); ?>
    <?php echo $form->error($model, 'nombre'); ?>
</div>
<div>
    <?php echo $form->labelEx($model, 'descripcion'); ?>
    <?php echo $form->textArea($model, 'descripcion'); ?>
    <?php echo $form->error($model, 'descripcion'); ?>
</div>
<?php echo CHtml::submitButton('Editar'); ?>
<?php $this->endWidget(); ?>
