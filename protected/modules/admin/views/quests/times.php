<!-- Всплывающее сообщение -->
<?php if(Yii::app()->user->hasFlash('status')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('status'); ?>
</div>

<?php endif; ?>



<div class="form">

<!-- Скрипт для дата-пикера -->

<script type="text/javascript">
  $(function () {
    $('.datetimepicker').datetimepicker(
      {pickDate: false, language: 'ru', minuteStepping: 5}
    );
    $('.search-button').on('click', function(){
    	$('.search-form').slideToggle(300);
    	return false;
    });
  
});

</script>
<h2>Редактирование времени и стоимости квеста</h2>
<br />
        
        
<?php echo CHtml::beginForm(); ?>

<?php foreach($items as $i=>$item): ?>
Время -        
<?php echo CHtml::activeTextField($item,"[$i]time1", array("class"=>"datetimepicker", "style"=>"width:42px")); ?> - 
<?php echo CHtml::activeTextField($item,"[$i]time2", array("class"=>"datetimepicker", "style"=>"width:42px")); ?> &nbsp;&nbsp;&nbsp;&nbsp;&rarr;&nbsp;&nbsp;&nbsp;&nbsp;Стоимость квеста -
<?php echo CHtml::activeTextField($item,"[$i]price",  array("style"=>"width:70px")); ?>
<hr />
<?php endforeach; ?>

<?php if (isset($item))
          echo CHtml::submitButton('Сохранить');
?> 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->

<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::link('Добавить время','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <div class="wide form">
    <?php echo CHtml::activeTextField($model,"time1", array("class"=>"datetimepicker","style"=>"width:42px")); ?>
    <?php echo CHtml::activeTextField($model,"time2", array("class"=>"datetimepicker","style"=>"width:42px")); ?>
    <?php echo CHtml::activeTextField($model,"price",  array("style"=>"width:70px")); ?>
    <?php echo CHtml::submitButton('Добавить', array('name'=>'add')); ?>
    </div>
</div>

<?php echo CHtml::endForm(); ?>
</div><!-- form -->

