<?php 

namespace app\controllers;
use Yii;
class PostController extends AppController
{
	public $layout = 'basic';
	public function actionIndex(){
			if( Yii::$app->request->isAjax ){
					debug($_POST);
					return 'test';
			}
			return $this->render('test');
	}
	public function actionShow(){
			$this->view->title = "Article";
			$this->view->registerMetaTag(['name' => 'keywords', 'content' => 'article example']);
			$this->view->registerMetaTag(['name' => 'description', 'content' => 'It`s an article']);

		//	$this->layout = 'basic';
			return $this->render('show');
	}
}