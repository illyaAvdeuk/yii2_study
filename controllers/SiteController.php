<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MyForm;
use app\models\User;
use app\models\Comments;
use yii\data\Pagination;
use app\models\Posts;
use app\models\Courses;
use app\models\Minicourses;
use app\models\Reviews;
use app\models\Sef;
use app\models\Sites;
use app\components\PostOthers;
class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $query = Posts::find()->where(['hide' == 0]);
        $pagination = new Pagination([
            'pageSize' => 5,
            'totalCount' => $query->count(),
            ]);

        $posts = $query->orderBy(['date' => SORT_DESC])
                ->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
        Posts::setNumbers($posts);
        return $this->render('index', [
                'posts' => $posts,
                'active_page' => Yii::$app->request->get("page", 1),
                'count_pages' => $pagination->getPageCount(),
                'pagination' => $pagination
            ]);
    }
     public function actionAuthor()
    {
       return $this->render('author');
    }
/*
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
	
	public function actionHello($message = "My message is: "){
		return $this->render('hello',
		['message' => $message]
		);
	}


	public function actionForm() {
		$form = new MyForm();
		
		if ($form->load(Yii::$app->request->post()) && $form->validate()) {
			$name  = Html::encode($form->name);
			$email = Html::encode($form->email);
			$phone = Html::encode($form->phone);
			
			$form->file = UploadedFile::getInstance($form, 'file');
			$form->file->saveAs('photo/' . $form->file->baseName . "." . $form->file->extension);
		} else {
		
		}
		return $this->render('form',
		['form' => $form,
		'name' => $name,
		'email' => $email,
		'phone' => $phone]
		);
	}
	public function actionUser(){
		$name = Yii::$app->request->get('name');
		
		$cookies = Yii::$app->response->cookies;
		
		$cookies->add(new \yii\web\Cookie([
			'name'  => 'name',
			'value' => $name
		]));
	}

	public function actionComments() {
		$comments = Comments::find();
		$pagination = new Pagination([
		'defaultPageSize' => 2,
		'totalCount' => $comments->count()
		]);
		$cookies = Yii::$app->request->cookies;
		$comments = $comments->offset($pagination->offset)->limit($pagination->limit)->all();
		return $this->render('comments', [
		'comments' => $comments,
		'pagination' => $pagination,
		'name' => $cookies->getValue('name')
		]);
	}
	*/





}
