<?php
/**
 * This is the template for generating the form view for crud.
 * The following variables are available in this template:
 * - $ID: the primary key name
 * - $modelClass: the model class name
 * - $columns: a list of column schema objects
 */
?>
<div class="form">

<?php echo "<?php echo CHtml::beginForm(); ?>\n"; ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo "<?php echo CHtml::errorSummary(\$model); ?>\n"; ?>

<?php
foreach($columns as $column)
{
	if($column->isPrimaryKey)
		continue;
?>
	<div class="row">
		<?php echo "<?php echo ".$this->generateInputLabel($modelClass,$column)."; ?>\n"; ?>
		<?php echo "<?php echo ".$this->generateInputField($modelClass,$column)."; ?>\n"; ?>
	</div>

<?php
}
?>
	<div class="row buttons">
		<?php echo "<?php echo CHtml::submitButton(\$model->isNewRecord ? 'Create' : 'Save'); ?>\n"; ?>
	</div>

<?php echo "<?php echo CHtml::endForm(); ?>\n"; ?>

</div><!-- form -->