
<script type="text/javascript">
  $(function () {
    
    date = new Date(2015, 11, 29);
    date1 = new Date(2015, 11, 30);    
    var myDatepicker = $('.datepicker-here').datepicker().data('datepicker');
    <?php for($j=0; $j<$count; $j++){
    $n = explode('.', $a[$j]);    
    echo 'date = new Date('.$n[2].', '.($n[1]-1).', '.$n[0].');';     
    echo 'myDatepicker.selectDate(date);';
    }
    ?>
});

</script>
<?php echo CHtml::form()?>
<?php echo CHtml::activeTextField($model,"day", array("class"=>"datepicker-here", "data-multiple-dates-separator"=>", ", "data-multiple-dates"=>"true", "data-inline"=>"true", "style"=>"width:282px")); ?>
<?php echo '<br />'; ?>
<?php echo CHTml::submitButton('Изменить', array('name'=>'update')); ?>
<?php echo CHtml::endForm(); ?>
