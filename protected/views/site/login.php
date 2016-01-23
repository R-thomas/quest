<div class="login_form">

<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>



<h1 class="login_form_h1 text-uppercase"><u>Вход в административную часть сайта</u></h1>

<p>Пожалуйста, заполните данные для входа в административную панель:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	
		<?php echo $form->labelEx($model,'username', array('class'=>'login_form_label')); ?>
		<?php echo $form->textField($model,'username', array('class'=>'login_form_input')); ?>
		<?php echo $form->error($model,'username', array('class'=>'login_form_error')); ?>
	

	
		<?php echo $form->labelEx($model,'password', array('class'=>'login_form_label')); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'login_form_input')); ?>
		<?php echo $form->error($model,'password', array('class'=>'login_form_error')); ?>
	
		<?php echo $form->label($model,'rememberMe', array('class'=>'login_form_label')); ?>
        <?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	
		<?php echo CHtml::submitButton('Войти', array('class'=>'btn btn-info login_form_button text-uppercase')); ?>
	

<?php $this->endWidget(); ?>
</div><!-- form -->
</div>