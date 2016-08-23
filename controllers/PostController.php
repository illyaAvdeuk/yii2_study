<?php 

namespace app\controllers;
use Yii;
use app\models\TestForm;
use app\models\Category;
use app\models\Product;
class PostController extends AppController
{
	public $layout = 'basic';
	public function actionIndex(){
			if( Yii::$app->request->isAjax ){
					//debug($_POST);
					return 'test';
			}

			$post = TestForm::findOne(2);
			//$post->delete();
		//	$post->email = 'test@example.com';
		//	$post->save();
			//debug($post); 

			$model = new TestForm();
		/*	$model->name = 'Автор';
			$model->email = 'test@example.com';
			$model->text = 'Текст сообщения';
			$model->save();*/



				if($model->load(Yii::$app->request->post())){
					if ($model->save()) {
							Yii::$app->session->setFlash('success', '<div class="alert alert-success" role="alert">Data confirmed</div>');
							$this->refresh();
					} else {
							Yii::$app->session->setFlash('error', '<div class="alert alert-danger" role="alert">Error!</div>');

					}

				}


			$rating = ['1', '2', '3', '4', '5'];
			return $this->render('test', compact('model', 'rating'));
	}
	public function actionShow(){
			$this->view->title = "Article";
			$this->view->registerMetaTag(['name' => 'keywords', 'content' => 'article example']);
			$this->view->registerMetaTag(['name' => 'description', 'content' => 'It`s an article']);

			//$cats = Category::find()->all();
			//$cats = Category::find()->orderBy(['id' => SORT_ASC])->all();
			//$cats = Category::find()->asArray()->all();
			//$cats = Category::find()->asArray()->where(['parent'=>691])->all();
			//$cats = Category::find()->asArray()->where(['like', 'title', 'pp'])->all();
			//$cats = Category::find()->asArray()->where(['<=', 'id', '695'])->all();
			//$cats = Category::find()->asArray()->where(['parent'=>691])->limit(2)->all();
			//$cats = Category::find()->asArray()->where(['parent'=>691])->one();
			//$cats = Category::find()->asArray()->where(['parent'=>691])->count();
			//$cats = Category::findAll(['parent' => 691]);
			//$cats = Category::find()->asArray()->where(['like', 'title', 'pp'])->all();
			//$query1 = "SELECT * FROM categories WHERE title LIKE '%pp%'";
		//	$query = "SELECT * FROM categories WHERE title LIKE :search";

			//$cats = Category::findBySql($query)->asArray()->all();
		//	$cats = Category::findBySql($query, [':search' => '%pp%'])->asArray()->all();

		$cats = Category::find()->with('products')->where('id=694')->all();
		//	$this->layout = 'basic';
			return $this->render('show', compact('cats'));
	}
}