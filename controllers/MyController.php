<?php 

namespace app\controllers;

class MyController extends AppController
{
	public function actionIndex($id = null){
		$hi = 'Hello, world!';
		$names = ['Illya', 'Aleksander', 'Pasha'];
	//	return $this->render('index', ['hello' => $hi, 'names' => $names]);
		return $this->render('index', compact('hi', 'names', 'id'));

		if(!$id) {
			$id = "id is not defined";
		}
	}

	public function actionBlogPost(){
		//	my/blog-post
		return 'Blog Post';
	}
}