<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$action = Yii::$app->controller->action->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" type="image/x-icon" href="/web/favicon.ico">
</head>
<body>
<?php $this->beginBody() ?>




<div id="bg">
        <div id="container">
            <div id="header">
                <img src="images/header.png" alt="Шапка сайта" />
            </div>
            <div id="topmenu">
                <ul>
                                            <li>
                            <a  href="<?=Yii::$app->urlManager->createUrl(["site/index"])?>" <?php if ($action == "index") { ?> class="active" <?php } ?>>
                            <img src="images/home.png" alt="Главная" />                         </a>
                        </li>
                                            <li>
                            <a  href="<?=Yii::$app->urlManager->createUrl(["site/author"])?>" <?php if ($action == "author") { ?> class="active" <?php } ?>>
                            Об авторе                           </a>
                        </li>
                                            <li>
                            <a  href="<?=Yii::$app->urlManager->createUrl(["site/video"])?>" <?php if ($action == "video") { ?> class="active" <?php } ?>>
                            Видеокурсы                          </a>
                        </li>
                                            <li>
                            <a  href="<?=Yii::$app->urlManager->createUrl(["site/rev"])?>" <?php if ($action == "rev") { ?> class="active" <?php } ?>>
                            Видеоотзывы                         </a>
                        </li>
                                            <li>
                            <a rel="external" href="https://myrusakov.ru/" >
                            Мой сайт                            </a>
                        </li>
                                            <li>
                            <a  href="<?=Yii::$app->urlManager->createUrl(["site/sites"])?>" <?php if ($action == "sites") { ?> class="active" <?php } ?>>
                            Сайты учеников                          </a>
                        </li>
                                    </ul>
                <div id="form_search">
                    <form name="search" action="https://blog.myrusakov.ru/functions.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <input type="text" name="q" class="input" />
                                </td>
                                <td>
                                    <input type="hidden" name="func" value="search" />
                                    <input type="image" src="images/button_search.png" class="icon_button" alt="Поиск" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <div>
                <table id="content">
                    <tr>
                        <td id="left">
                            <div class="post">
    <h2>Выпуск №31. Как сделать мультиязычный сайт?</h2>
    <hr />
    <table class="post_info">
        <tr>
            <td>
                <img src="images/date.png" alt="Дата" />
            </td>
            <td>
                <p>27 Июня, 2016</p>
            </td>
            <td class="right">
                <img src="images/hits.png" alt="Просмотров" />
            </td>
            <td class="center">
                <p>3347</p>
            </td>
        </tr>
    </table>
    <div class="post_text">
        <img class="intro" src="https://blog.myrusakov.ru/images/posts/multilanguage.png" alt="Как сделать мультиязычный сайт?" />
        <p>Я уже обещал разобрать мультиязычность на сайте, и в сегодняшнем видео я это сделаю.</p>     <div class="clear"></div>
    </div>
    <p class="more">
        <a href="https://blog.myrusakov.ru/multilanguage.html">Читать полностью</a>
        <a href="https://blog.myrusakov.ru/subscribe.html">Другие выпуски</a>
    </p>
</div><div class="post">
    <h2>Выпуск №30. Настройка HTTPS на сайте</h2>
    <hr />
    <table class="post_info">
        <tr>
            <td>
                <img src="images/date.png" alt="Дата" />
            </td>
            <td>
                <p>17 Мая, 2016</p>
            </td>
            <td class="right">
                <img src="images/hits.png" alt="Просмотров" />
            </td>
            <td class="center">
                <p>6145</p>
            </td>
        </tr>
    </table>
    <div class="post_text">
        <img class="intro" src="https://blog.myrusakov.ru/images/posts/https.png" alt="Настройка HTTPS на сайте" />
        <p>Относительно недавно я на некоторых своих сайтах установил https. В этом видео Вы узнаете, какие преимущества даёт https, как он работает, где взять бесплатный сертификат на 3 года, сэкономив порядка 3-20 тысяч рублей, и как его установить.</p>     <div class="clear"></div>
    </div>
    <p class="more">
        <a href="https://blog.myrusakov.ru/https.html">Читать полностью</a>
        <a href="https://blog.myrusakov.ru/subscribe.html">Другие выпуски</a>
    </p>
</div><div class="post">
    <h2>Выпуск №29. Работа с API vk.com</h2>
    <hr />
    <table class="post_info">
        <tr>
            <td>
                <img src="images/date.png" alt="Дата" />
            </td>
            <td>
                <p>18 Февраля, 2016</p>
            </td>
            <td class="right">
                <img src="images/hits.png" alt="Просмотров" />
            </td>
            <td class="center">
                <p>6434</p>
            </td>
        </tr>
    </table>
    <div class="post_text">
        <img class="intro" src="https://blog.myrusakov.ru/images/posts/api-vk.png" alt="Работа с API vk.com" />
        <p>В этом уроке, учитывая интерес к этой теме, я расскажу, как работать с API vk.com. К концу урока мы реализуем вполне рабочее приложение.</p>     <div class="clear"></div>
    </div>
    <p class="more">
        <a href="https://blog.myrusakov.ru/api-vk.html">Читать полностью</a>
        <a href="https://blog.myrusakov.ru/subscribe.html">Другие выпуски</a>
    </p>
</div><div class="post">
    <h2>Выпуск №28. Мошенничество на fl.ru</h2>
    <hr />
    <table class="post_info">
        <tr>
            <td>
                <img src="images/date.png" alt="Дата" />
            </td>
            <td>
                <p>12 Января, 2016</p>
            </td>
            <td class="right">
                <img src="images/hits.png" alt="Просмотров" />
            </td>
            <td class="center">
                <p>9378</p>
            </td>
        </tr>
    </table>
    <div class="post_text">
        <img class="intro" src="https://blog.myrusakov.ru/images/posts/fraud.png" alt="Мошенничество на fl.ru" />
        <p>Многие из Вас, наверняка, используют фриланс-сервисы со стороны заказчика. Я сам время от времени обращуюсь за помощью к фрилансерам. И вот не так давно у меня снова появилась задача.</p>      <div class="clear"></div>
    </div>
    <p class="more">
        <a href="https://blog.myrusakov.ru/fraud.html">Читать полностью</a>
        <a href="https://blog.myrusakov.ru/subscribe.html">Другие выпуски</a>
    </p>
</div><div class="post">
    <h2>Выпуск №27. Мои секреты планирования дел</h2>
    <hr />
    <table class="post_info">
        <tr>
            <td>
                <img src="images/date.png" alt="Дата" />
            </td>
            <td>
                <p>8 Декабря, 2015</p>
            </td>
            <td class="right">
                <img src="images/hits.png" alt="Просмотров" />
            </td>
            <td class="center">
                <p>5482</p>
            </td>
        </tr>
    </table>
    <div class="post_text">
        <img class="intro" src="https://blog.myrusakov.ru/images/posts/plan.png" alt="Мои секреты планирования дел" />
        <p>У меня часто спрашивают, как я занимаюсь планированием своих дел, как всё успеваю, какую программу использую и так далее. И в сегодняшнем видео я решил ответить на все вопросы, плюс показать процесс планирования создания сайта. Видео действительно очень полезное, и я рекомендую его посмотреть абсолютно всем.</p>        <div class="clear"></div>
    </div>
    <p class="more">
        <a href="https://blog.myrusakov.ru/plan.html">Читать полностью</a>
        <a href="https://blog.myrusakov.ru/subscribe.html">Другие выпуски</a>
    </p>
</div><br />
<hr />
<div id="pagination">
    <table>
        <tr>
            <td>
                <span>Страница 1 из 12</span>
            </td>
            <td>
                <div id="pages">
                    &nbsp;
                    В начало
                                        &nbsp;
                    &laquo;
                                                                &nbsp;
                                                    1                                                                   &nbsp;
                                                    <a href="https://blog.myrusakov.ru/?page=2">2</a>
                                                                    &nbsp;
                                                    <a href="https://blog.myrusakov.ru/?page=3">3</a>
                                                                    &nbsp;
                                                    <a href="https://blog.myrusakov.ru/?page=4">4</a>
                                                                    &nbsp;
                                                    <a href="https://blog.myrusakov.ru/?page=5">5</a>
                                                                    &nbsp;
                                                    <a href="https://blog.myrusakov.ru/?page=6">6</a>
                                                                    &nbsp;
                                                    <a href="https://blog.myrusakov.ru/?page=7">7</a>
                                                                    &nbsp;
                                                    <a href="https://blog.myrusakov.ru/?page=8">8</a>
                                                                    &nbsp;
                                                    <a href="https://blog.myrusakov.ru/?page=9">9</a>
                                                                    &nbsp;
                                                    <a href="https://blog.myrusakov.ru/?page=10">10</a>
                                                                &nbsp;
                    
                    
                                        <a href="https://blog.myrusakov.ru/?page=2" title="Вперёд">&raquo;</a>
                                        &nbsp;
                                        <a href="https://blog.myrusakov.ru/?page=12">В конец&raquo;</a>
                                    </div>
            </td>
        </tr>
    </table>
</div>                      </td>
                        <td id="right">
                                                            <div class="right_block">
                                    <div id="author">
    <h3>Михаил Русаков</h3>
    <img src="images/mr.png" alt="Михаил Русаков" />
    <br />
    <a href="https://blog.myrusakov.ru/author.html">Об авторе</a>
    <br />
    <a rel="external" class="button" href="https://vk.com/myrusakov">Автор в контакте</a>
</div>                              </div>
                                                            <div class="right_block">
                                    <table id="right_block_courses">
    <tr>
        <td id="right_minicourses_list">
                            <div class="show">
                    <h3 class="center">Пример создания Интернет-магазина на OpenCart 2.0</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/freeim2.png" alt="Пример создания Интернет-магазина на OpenCart 2.0" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/freeim2?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=freeim2">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">Пример создания сайта на фреймворке Yii 2.0</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/freeyii.png" alt="Пример создания сайта на фреймворке Yii 2.0" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/freeyii?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=freeyii">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">Заработок на создании сайтов под заказ</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/freefl.png" alt="Заработок на создании сайтов под заказ" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/freefl?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=freefl">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">Пример создания блога на WordPress</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/freewp.png" alt="Пример создания блога на WordPress" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/freewp?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=freewp">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">HTML5 и CSS3 для начинающих</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/freehtml5.png" alt="HTML5 и CSS3 для начинающих" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/freehtml5?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=freehtml5">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">Создание движка на PHP для начинающих</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/freephp2.png" alt="Создание движка на PHP для начинающих" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/freephp2?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=freephp2">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">Видеокурс по основам JavaScript</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/freejs.png" alt="Видеокурс по основам JavaScript" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/freejs?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=freejs">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">Создание сайта от начала и до конца</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/book.png" alt="Создание сайта от начала и до конца" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/book?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=book">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">Создание Интернет-магазина с нуля</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/freeim.png" alt="Создание Интернет-магазина с нуля" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/freeim?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=freeim">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">Мини-курс по вёрстке сайтов</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/freemakeup.png" alt="Мини-курс по вёрстке сайтов" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/freemakeup?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=freemakeup">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">Видеокурс по основам PHP</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/freephp.png" alt="Видеокурс по основам PHP" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/freephp?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=freephp">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                            <div class="hide">
                    <h3 class="center">Видеокурс по основам HTML</h3>
                    <table>
                        <tr>
                            <td class="arrow">
                                <img src="images/left.png" alt="Влево" onclick="changeMiniCourse(false, 'right_minicourses_list')" />
                            </td>
                            <td class="arrow">
                                <img src="images/right.png" alt="Вправо" onclick="changeMiniCourse(true, 'right_minicourses_list')" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="center">
                                <img src="images/courses/html.png" alt="Видеокурс по основам HTML" />
                            </td>
                        </tr>
                    </table>
                    <p class="center">
                        <a rel="external" href="https://srs.myrusakov.ru/html?utm_source=Blog.MyRusakov.ru&amp;utm_campaign=html">Получить этот курс Бесплатно</a>
                    </p>
                </div>
                    </td>   
    </tr>
</table>                                </div>
                                                            <div class="right_block">
                                    <div class="online">
    <h3>Бесплатный онлайн-семинар</h3>
    <p>
        <img src="images/11steps.png" alt="Онлайн-семинар" />
    </p>
    <p><span>11 шагов к созданию своей Web-студии</span><br />После данного семинара:</p>
    <ul class="ul_mark">
        <li>Вы будете знать, какое главное отличие богатых от бедных.</li>
        <li>Вы получите бесплатный подарок с Вашим финансовым планом и пошаговый чеклист для его достижения.</li>
        <li>Вы узнаете множество моих личных историй про несколько моих бизнесов, в том числе, и неудачных.</li>
        <li>Вы увидите прозрачную схему из 11-ти шагов к созданию своей успешной Web-студии.</li>
    </ul>
    <p>
        <a rel="external" href="http://srs.myrusakov.ru/11steps?utm_source=Blog.MyRusakov.ru&utm_campaign=11steps">Записаться на семинар</a>
    </p>
</div>
<hr />
<div class="online">
    <h3>Бесплатный онлайн-семинар</h3>
    <p>
        <img src="images/create-im.png" alt="Онлайн-семинар" />
    </p>
    <p><span>Как создать профессиональный Интернет-магазин?</span><br />После данного семинара:</p>
    <ul class="ul_mark">
    <li>Вы будете знать, как создать Интернет-магазин.</li>
    <li>Вы получите бесплатный подарок с подробным описанием каждого шага.</li>
    <li>Вы сможете уже приступить к созданию Интернет-магазина.</li>
    </ul>
    <p>
        <a rel="external" href="http://srs.myrusakov.ru/createim?utm_source=Blog.MyRusakov.ru&utm_campaign=createim">Записаться на семинар</a>
    </p>
</div>
<hr />
<div class="online">
    <h3>Бесплатный онлайн-семинар</h3>
    <p>
        <img src="images/5steps.png" alt="Онлайн-семинар" />
    </p>
    <p><span>5 шагов и профессиональный сайт готов!</span><br />После данного семинара:</p>
    <ul class="ul_mark">
    <li>Вы будете иметь чёткий план действий.</li>
    <li>Вы сможете начать создавать сайт.</li>
    <li>Вы сможете легко ориентироваться в информации по созданию сайтов.</li>
    </ul>
    <p>
        <a rel="external" href="http://srs.myrusakov.ru/5steps?utm_source=Blog.MyRusakov.ru&utm_campaign=5steps">Записаться на семинар</a>
    </p>
</div>                              </div>
                                                            <div class="right_block">
                                    <h3>Рекомендую</h3>
<div class="recommendation">
    <img src="images/2domains.png" alt="2domains.ru" />
    <a rel="external" href="http://2domains.ru">2domains.ru</a>
    <p>Один из лучших регистраторов доменных имен в рунете. Домен .RU и .РФ всего за 99 рублей. Все домены покупаю только у них!</p>
</div>
<br />
<div class="recommendation">
    <img src="images/hostia.png" alt="Hostia.ru" />
    <a rel="external" href="http://hostia.ru/billing/host.php?uid=11034">Hostia.ru</a>
    <p>На мой взгляд, лучший хостинг в Рунете. Я перепробовал много их, то они были медленными, то отключались часто, то была высокая цена. <a rel="external" href="http://hostia.ru/billing/host.php?uid=11034">Hostia.ru</a> - это отличная скорость, высокая надёжность и при этом низкая цена (от 0.88$ в месяц).</p>
</div>                              </div>
                                                    </td>
                    </tr>
                </table>
                <div class="clear"></div>
            </div>
            <div id="footer">
                <table>
                    <tr>
                        <td>
                            <p>Blog.MyRusakov.ru <?=date("Y")?></p>
                            <p>Все права защищены.</p>
                        </td>
                        <td class="right">
                            <script type="text/javascript"><!--
                                document.write("<a href='http://www.liveinternet.ru/click' " + "target=_blank><img src='//counter.yadro.ru/hit?t21.11;r"
                                +escape(document.referrer)+((typeof(screen)=="undefined")?"":
                                ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                                screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                                ";"+Math.random()+
                                "' alt='' title='LiveInternet: показано число просмотров за 24"+
                                " часа, посетителей за 24 часа и за сегодня' "+
                                "border='0' width='88' height='31'><\/a>")
                            //--></script>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        externalLinks();
    </script>










<!--
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
