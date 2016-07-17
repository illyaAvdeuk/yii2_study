<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
	if((isset($name)) || (isset($email)) || (isset($phone)) ){ ?>
	<section>
	<h2>Ваши данные</h2>
	<p>Вы указали имя: <?=$name?></p>
	<p>Вы указали электронный ящик: <?=$email?></p>
	<p>Вы указали телефон: <?=$phone?></p>
	</section>
	<?php }
	$f = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);?>
	<?=$f->field($form, 'name')?>
	<?=$f->field($form, 'email')?>
	<?=$f->field($form, 'phone')?>
	<?=$f->field($form, 'file')->fileInput() ?>
	<?= Html::submitButton('SEND');?>
	<?php ActiveForm::end();?>
