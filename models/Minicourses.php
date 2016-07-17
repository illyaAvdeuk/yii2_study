<?php 
namespace app\models;

use yii\db\ActiveRecord;
class Minicourses extends ActiveRecord {
	public function afterFind(){     // метод вызывается после выборки из базы
			$this->img = "/web/images/minicourses/".$this->img;
	}
}
?>
