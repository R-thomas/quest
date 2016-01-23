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
            <h1 class="text-uppercase">Квест в подарок</h1>
            <img src="../../../images/arrow3.png" width="277" height="19" class="img-responsive center-block arrow3_present"/>
        </div>
    </div>
    
    <div class="row form-order-row">
        <div class="col-md-12 col-sm-12 col-xs-12 form-order">
            
            <?php $form=$this->beginWidget('CActiveForm', array(
                    	'id'=>'orders-form',
                    	// Please note: When you enable ajax validation, make sure the corresponding
                    	// controller action is handling ajax validation correctly.
                    	// There is a call to performAjaxValidation() commented in generated controller code.
                    	// See class documentation of CActiveForm for details on this.
                    	'enableAjaxValidation'=>false,
                    ));
                    ?>
                    <div class="error_wrap"><?php echo $form->errorSummary($model); ?></div>
                    
                    <?php echo $form->textField($model,'name', array('class'=>'name_tel_input name_tel_input2', 'id'=>'inp_name', 'placeholder'=>'Введите имя...')); ?>
            		<?php echo $form->error($model,'name'); ?>
                    
                    <?php echo $form->textField($model,'tel', array('class'=>'name_tel_input', 'id'=>'inp_tel', 'placeholder'=>'Номер телефона...')); ?>
            		<?php echo $form->error($model,'tel'); ?>
                    
                    <?php echo CHtml::submitButton('Купить', array('class'=>'submit_button submit_button3 text-uppercase')); ?>
                    
                    <?php $this->endWidget(); ?>   
        
        
        
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
        
</div>