<?php 

namespace app\models;
//use yii\base\Model;
use yii\db\ActiveRecord;



class TestForm extends ActiveRecord{

	//public $name;
//	public $email;
//	public $text;
	public $checkBox;
	public $radioList;
public static function tableName(){
		return 'posts';
	}

	public function attributeLabels(){

		return [
			'name' 		=> 'Your name',
			'email' 	=> 'Enter valid email',
			'text' 		=> 'Message',
			'checkBox'  => 'Rate this shit',
			'radioList' => 'Just select what u like',
		];
	}

	public function rules(){
		return [
			['name', 'required', 'message' => 'Enter your name, damn it'],
			['name', 'string', 'min' => 2],
			['name', 'string', 'max' => 20],
			['email', 'required'],
			['email', 'email'],
			['text', 'trim'],
			['checkBox', 'safe'],
			['radioList', 'safe'],
		];
	}

}