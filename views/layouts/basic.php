<?php 

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?php $this->head() ?>
<head>
	 <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
</head>
<body>
<?php $this->beginBody() ?>

	<div class="wrap">
		<div class="container">
			<ul class="nav nav-tabs">
  <li role="presentation" class="active"><?= Html::a('Главная', '/web/') ?></li>
  <li role="presentation"><?= Html::a('Статьи', ['post/index']) ?></li>
  <li role="presentation"><?= Html::a('Статья', ['post/show']) ?></li>
</ul>
<?php if( isset($this->blocks['customBlock']) ){ ?>
			<?php echo $this->blocks['customBlock']; ?>
<?php } ?>
		<?= $content ?>	
		</div>
	</div>
	
	<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
