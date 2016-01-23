<?php
/* @var $this QuestsController */
/* @var $data Quests */
?>

<!-- Всплывающее сообщение -->
<?php if(Yii::app()->user->hasFlash('status')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('status'); ?>
</div>

<?php endif; ?>







<div class="view">

    <?php echo '<br />';?>
	<?php echo CHtml::image("/upload/images/" . $data->image, 'Нет изображения - загрузите изображение', array('style' => 'heigt:150px; width:150px; float:right; border:1px solid #c9e0ed; margin:10px') ); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title).'&nbsp;&nbsp;'.CHtml::link('(редактировать квест)', array('update', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	
	<br />
    <hr />
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('times')); ?>:</b>
    
    <?php
	
    echo CHtml::link('Редактировать время работы и стоимость', array('times', 'id'=>$data->id));
    echo '<br />';
    
    ?>
	
    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'time-form',
	'enableAjaxValidation'=>false,
    )); ?>
    
    
    <?php 
    foreach ($data->times as $i=>$time)
    {   
        if($i == 0)
        {
            echo '<br />';
            echo CHtml::submitButton('Удалить выбранное');
            echo '<hr />';
        }
        echo CHtml::checkBox("id[]", '', array('value'=>$time->id));
        echo '&nbsp;&nbsp;<strong>'.substr($time->time1, 0, 5).'</strong> - <strong>'.substr($time->time2, 0, 5).'</strong>&nbsp;&nbsp;&nbsp;&nbsp;&rarr;&nbsp;&nbsp;&nbsp;&nbsp; Стоимость - <strong>'.$time->price.'</strong>&nbsp;рублей' ;
        
        
        echo '<br />';
    } 
    
    ?>
    
    <?php $this->endWidget(); ?>
	<br />


</div>