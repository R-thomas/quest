<script>
    $(document).ready(function(){
	
    var today = new Date();
    $('#datetimepicker1').datetimepicker(
      {pickTime: false, 
      language: 'ru', 
      disabledDates:[<?php echo $new_str_weekend; ?>], 
      defaultDate:today}
    );
    
    $('.datetimepicker').datetimepicker(
      {pickTime: false, 
      language: 'ru', 
      disabledDates:[<?php echo $new_str_weekend; ?>], 
      defaultDate:today}
    );
    });
</script>

<div class="nav--order-wrap"><div class="step1"><p>1</p></div><div  class="arrow_right"><img src="../../../images/arrow_right.png" width="19" height="19" /></div><div  class="step2"><p>2</p></div></div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orders-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'quest_id'); ?>
		<?php echo $form->dropDownList($model,'quest_id', Quests::all(), array('class'=>'quest_id')); ?>
		<?php echo $form->error($model,'quest_id'); ?>
        <div class="form-group">	       
		<?php echo $form->labelEx($model,'date_day'); ?>
        <div class="input-group date" id="datetimepicker1">
		<?php echo $form->textField($model,'date_day', array("class"=>"datetimepicker form-control")); ?>
        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
        </div>
		<?php echo $form->error($model,'date_day'); ?>
	</div>
	    
	<div class="row buttons">
		<?php echo CHtml::submitButton('Следующий этап', array('class'=>'submit_button text-uppercase')); ?>
	</div>

<?php $this->endWidget(); ?>