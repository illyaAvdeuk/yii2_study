<?php
namespace app\models;

use Yii;
use yii\base\Model;

	class MyForm extends Model {
		public $name;
		public $phone;
		public $email;
		public $file;
		public function rules(){
			return [
			[['name', 'email', 'phone'], 'required', 'message' => 'Проверьте поле еще раз'],
			['email', 'email', 'message' => 'Проверьте email еще раз'],
			[['file'], 'file', 'extensions' => 'jpg, png, fb2']
			];
		}
	}



?>