<?php
/* @var $this QuestsController */
/* @var $model Quests */


$this->menu=array(
	array('label'=>'Список квестов', 'url'=>array('index')),
	array('label'=>'Создать квест', 'url'=>array('create')),
);

?>

<h1>Менеджер квестов</h1>


<?php
	echo CHtml::form();
    echo CHtml::submitButton('Удалить выбранное', array('name' => 'del'));
    echo ' (Отметьте поля, которые хотите удалить)';
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'quests-grid',
    'selectableRows'=>2,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array('class' => 'CCheckBoxColumn',
            'id' => 'id'
        ),
		'title',
		'description',
		array(
            'name' => 'image',
            'value' => 'CHtml::image("/upload/images/" . $data->image, "Нет изображения - загрузите изображение", array("style" => "width:250px"))',
            'type' => 'html',
        ),  
        array(
			'class'=>'CButtonColumn',
            'viewButtonOptions' => array('style' => 'display:none'),
		),
	),
)); ?>

<?php
	echo CHtml::endForm();
?>