<?php
/* @var $this QuestsController */
/* @var $model Quests */



$this->menu=array(
	array('label'=>'Список квестов', 'url'=>array('index')),
	array('label'=>'Создать квест', 'url'=>array('create')),
	array('label'=>'Менеджер квестов', 'url'=>array('admin')),
);
?>

<h1>Редактировать квест "<?php echo $model->title; ?>"</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>