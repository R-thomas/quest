<?php
/* @var $this QuestsController */
/* @var $model Quests */


$this->menu=array(
	array('label'=>'Список квестов', 'url'=>array('index')),
	array('label'=>'Создать квест', 'url'=>array('create')),
	array('label'=>'Редактировать квест', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить квест', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Менеджер квестов', 'url'=>array('admin')),
);
?>

<h1>Квест "<?php echo $model->title; ?>"</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'title',
		'description',
        array(
            'name' => 'image',
            'type'=>'raw',
            'value'=>CHtml::image("/upload/images/" . $model->image, "Нет изображения - загрузите изображение", array("style" => "width:350px")),
        ), 
	),
)); ?>
