<?php 
namespace app\models;

use yii\db\ActiveRecord;
class Course extends ActiveRecord {

	public $img;
	public $order;
	public $link;

	public function afterFind(){     // метод вызывается после выборки из базы
			$this->link = "http://srs.myrusakov.ru/".$this->alias;
			$this->img = "/web/images/courses/".$this->alias.".png";
			$this->order = "http://srs.myrusakov.ru/order?product_ids=".$this->srs_id;
	}
}
?>
