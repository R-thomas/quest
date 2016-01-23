<div class="container-fluid bg_order">
    <div class="row bot">
        <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-3 col-sm-offset-0 col col-xs-offset-0">
            <div class="tel_title_div"><p class="tel_title lead">Телефон:</p></div>
            <p class="tel lead">+7(423) 267 00 66<br />+7(914) 693 75 07</p>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-0 col-sm-offset-0 col col-xs-offset-0">
            <a href="/site"><img class="logo img-responsive center-block" src="../../../images/logo.png"/></a>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4" id="adr">
            <p class="adr_title lead">Адрес:</p>
            <p class="adr lead">Владивосток , ул. Жигура, 26, <br />7 подъезд (фиолетовый)</p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="text-uppercase">Забронировать квест</h1>
            <img src="../../../images/arrow3.png" width="277" height="19" class="img-responsive center-block"/>
        </div>
    </div>
    
    <div class="row form-order-row">
    
        <div class="col-md-12 col-sm-12 col-xs-12 form-order form_step2">
        <div class="nav--order-wrap"><a href="/site/order"><div class="step1"><p>1</p></div></a><div  class="arrow_right"><img src="../../../images/arrow_right.png" width="19" height="19" /></div><div  class="step3"><p>2</p></div></div>
            <?php $form=$this->beginWidget('CActiveForm', array(
            	'id'=>'orders-form',
            	// Please note: When you enable ajax validation, make sure the corresponding
            	// controller action is handling ajax validation correctly.
            	// There is a call to performAjaxValidation() commented in generated controller code.
            	// See class documentation of CActiveForm for details on this.
            	'enableAjaxValidation'=>false,
            ));
            
            echo '<div class="error_wrap">'.$form->errorSummary($models_orders).'</div>';
            echo '<label class="label_time">Выберите время</label>';
            foreach ($model->times as $time)
                {   
                    echo '<div class="radio_div">';
                    echo CHtml::radioButton('selected_time_id', false, array ('value' => $time->id, 'id'=>$time->id, 'class'=>'radio_my'));
                    echo '<label for='.$time->id.' class="label_step2">'.substr($time->time1, 0, 5).' - '.substr($time->time2, 0, 5).'&nbsp;&nbsp;&nbsp;&nbsp;&rarr;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Стоимость</strong> - '.$time->price.'&nbsp;рублей</label>';
                    echo '</div>';
                }
            ?>
            <?php echo '<div class="error_wrap2">'.$form->error($models_orders,'selected_time_id').'</div>'; ?>
                <div class="row name_tel">
            		<label for="Orders_name">Введите данные</label>
            		<?php echo $form->textField($models_orders,'name', array('class'=>'name_tel_input', 'placeholder'=>'Введите имя...')); ?>
            		<?php echo $form->error($models_orders,'name'); ?>
            	</div>
                <div class="row name_tel">
            		<?php echo $form->textField($models_orders,'tel', array('class'=>'name_tel_input name_tel_input3', 'placeholder'=>'Номер телефона...')); ?>
            		<?php echo $form->error($models_orders,'tel'); ?>
            	</div>
            	
            <div class="button_input">  
            <?php echo CHtml::submitButton('Забронировать квест', array('class'=>'submit_button submit_button2 text-uppercase')); ?>
            </div>
            
            <?php $this->endWidget(); ?>   
    
     
        </div>
    </div>
        
</div>

<div class="row footer">
    <div class="col-md-6 col-sm-6 col-xs-6">
        <p>© ООО “Сити квест лабиринт”. ВСЕ ПРАВА ЗАЩИЩЕНЫ</p>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <p class="text-right">Рекламно-производственная группа IDEA FIX</p>
    </div>
</div>