<?php

/* @var $this yii\web\View */
use yii\widgets\LinkPager;
$this->title = 'Личный блог';

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Личный блог'
    ]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'блог, рассылки'
    ]);

?>

<?php 
    foreach  ($posts as $post)
        include "intro_post.php";

?>
<br />
<hr />
<div id="pages">
        <?= 

            LinkPager::wiget([
                    'pagination' => $pagination,
                    'firstPageLabel' => 'В начало',
                    'lastPageLabel' => 'В конец',
                    'prevPageLabel' => '&laquo;',
                    //'lastPageLabel' => 'В конец',
                ])

        ?>
        <span>Страница <?=$active_page?> из <?=$count_pages?></span>
    <table>
        <tr>
            <td>
                
            </td>
            <td>
              
                  <div class="clear"></div>

                                    </div>