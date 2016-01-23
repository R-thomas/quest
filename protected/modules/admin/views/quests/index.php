<?php
/* @var $this QuestsController */
/* @var $dataProvider CActiveDataProvider */



$this->menu=array(
	array('label'=>'Создать квест', 'url'=>array('create')),
	array('label'=>'Менеджер квестов', 'url'=>array('admin')),
);
?>

<h1>Квесты</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
