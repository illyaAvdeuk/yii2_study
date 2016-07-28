<?php 

namespace app\components;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\Posts;
class PostOthers extends Widget {

	public $id;
	public function run(){
		$posts = Posts::find()->where(['hide' => 0])->limit(5)->where(['not', ['id' => $this->id]])->orderBy("rand()")->all();
		foreach ($posts as $post) {
			
		}
	}
}
?>