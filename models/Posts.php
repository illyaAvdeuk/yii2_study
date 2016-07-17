<?php 
namespace app\models;

use yii\db\ActiveRecord;
class Posts extends ActiveRecord {
	public $number;
	public function afterFind(){

	}

	public static function setNumbers($post){
		$all_releases = Posts::find()->where(['is_release' => 1]) ->orderBy("date")->all();
			$number = 1;
			
	}
}
?>