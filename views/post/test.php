<?php 
 	use  yii\widgets\ActiveForm;
 //	use  yii\widgets\ActiveField;
 	use yii\helpers\Html;

?>


<h1>test Debug</h1>
<?php if(Yii::$app->session->hasFlash('success')) : ?>
	<?php echo Yii::$app->session->getFlash('success') ?>
<?php endif;?>

<?php if(Yii::$app->session->hasFlash('error')) : ?>
	<?php echo Yii::$app->session->getFlash('error') ?>
<?php endif;?>

<?php // debug($model); 
	  $form = ActiveForm::begin(['options' => ['id' => 'testForm']]);?> 
      <?= $form->field($model, 'name') ?>
      <?= $form->field($model, 'email') ?>
      <?= $form->field($model, 'text')->textarea(['rows' => '5']) ?>
      <?= $form->field($model, 'checkBox')->radioList($rating)?> 
      <?= $form->field($model, 'radioList')->checkboxList($rating)?> 

      <?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>

<?php         ActiveForm::end(); ?>