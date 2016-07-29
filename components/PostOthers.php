<?php 

namespace app\components;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\Posts;
class PostOthers extends Widget {

	public $id;
	public function run(){
		$posts = Posts::find()->where(['hide' => 0])->limit(5)->where(['not', ['id' => $this->id]])->orderBy("rand()")->all();
		$trs = "";
		foreach ($posts as $post) {
			$img = Html::tag('img', null, ['src' => $post->img, 'alt' => $post->title]);
			$td_1 = Html::tag('td', $img);
			$a_span = Html::tag('a', '«'.$post->title."»", ['href' =>$post->link]);     // if doesnt work » - 2_6 10.02
			$a_span .= Html::tag('span', $post->date, ['class' => 'date']);
			$td_2 = Html::tag('td', $a_span);
			$trs .= Html::tag('tr', $td_1.$td_2);			
		}
		return Html::tag('table', $trs, ['id' => 'post_others']);
	}
}
?>