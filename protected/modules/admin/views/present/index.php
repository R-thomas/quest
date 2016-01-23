
<h1>Квест в подарок</h1>
<?php
	echo CHtml::form();
    echo CHtml::submitButton('Удалить выбранное', array('name' => 'del'));
    echo ' (Отметьте поля, которые хотите удалить)';
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'present-grid',
    'selectableRows'=>2,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array('class' => 'CCheckBoxColumn',
                'id' => 'id'
        ),
		'name',
		'tel',
		array(
			'class'=>'CButtonColumn',
            'viewButtonOptions' => array('style' => 'display:none'),
            'updateButtonOptions' => array('style' => 'display:none'),
		),
	),
)); ?>


<?php
	echo CHtml::endForm();
?>