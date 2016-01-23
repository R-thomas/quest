<?php
/* @var $this QuestsController */
/* @var $model Quests */


$this->menu=array(
	array('label'=>'Список квестов', 'url'=>array('index')),
	array('label'=>'Менеджер квестов', 'url'=>array('admin')),
);
?>

<h1>Создать квест</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>