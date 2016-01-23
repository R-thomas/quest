
<h1>Менеджер заказов</h1>


<?php
	echo CHtml::form();
    echo CHtml::submitButton('Удалить выбранное', array('name' => 'del'));
    echo ' (Отметьте поля, которые хотите удалить)';
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'orders-grid',
    'selectableRows'=>2,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array('class' => 'CCheckBoxColumn',
                'id' => 'id'
        ),
		'name',
		'tel',
		'order_time' => array(
            'name' => 'order_time',
            'value' => 'date("j.m.Y", $data->order_time)." в ".date(" H:i", $data->order_time)',
        ),
		'selected_time' => array(
            'name' => 'selected_time',
            'value' => 'substr($data->selected_time->time1, 0, 5)." - ".substr($data->selected_time->time2, 0, 5)',
            'htmlOptions' => array('style' => 'width:120px')
        ),
		'date_day' => array(
            'name' => 'date_day',
            'htmlOptions' => array('style' => 'width:80px'),
        ),
		'price' => array(
            'name' => 'price',
            'value' => '$data->selected_time->price',
            'htmlOptions' => array('style' => 'width:60px')
        ),                
		'quest' => array(
            'name' => 'quest',
            'value' => '$data->quest->title',
        ),
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