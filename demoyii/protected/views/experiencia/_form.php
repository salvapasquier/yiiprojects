<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'experiencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'empresa'); ?>
		<?php echo $form->textField($model,'empresa',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio'); ?>
		<?php echo $form->textField($model,'inicio'); ?>
		<?php echo $form->error($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'finalizacion'); ?>
		<?php echo $form->textField($model,'finalizacion'); ?>
		<?php echo $form->error($model,'finalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jefe'); ?>
		<?php echo $form->textField($model,'jefe',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jefe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_id'); ?>
		<?php echo $form->textField($model,'usuario_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usuario_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->