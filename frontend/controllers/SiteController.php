<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use common\models\EditorForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    /**
     * @inheritdoc
     */
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
        $this->layout = '/new.php';
        return $this->render('new');
    }

    public function actionLearn()
    {
        $this->layout = '/about.php';
        return $this->render('learn');
    }

    public function actionApplication()
    {
        $this->layout = '/about.php';
        return $this->render('application');
    }

    public function actionAbout()
    {
        $this->layout = '/about.php';
        return $this->render('about_us');
    }

    public function actionContact()
    {

        $this->layout = '/about.php';
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact_us', [
                'model' => $model,
            ]);
        }
//
//        return $this->render('contact_us');
//        return $this->render('contact');
    }

    public function actionHelp()
    {
        $this->layout = '/about.php';
        return $this->render('help');
    }



//    public function actionEditor()
//    {
//        $model = new EditorForm();
//        return $this->render('editor', [
//            'model' => $model,
//        ]);
//    }
//
//    public function actionSignup()
//    {
//        $model = new SignupForm();
//        if ($model->load(Yii::$app->request->post())) {
//            if ($user = $model->signup()) {
//                if (Yii::$app->getUser()->login($user)) {
//                    return $this->goHome();
//                }
//            }
//        }
//
//        return $this->render('signup', [
//            'model' => $model,
//        ]);
//    }
//
//    /**
//     * frontend Home Page
//     * @return string
//     */
//    public function actionNew()
//    {
//        $this->layout = '/new.php';
//        return $this->render('new');
//    }
//
//    public function actionTest()
//    {
//        echo 'hello world !! test success !!';
//    }
//
//    public function actionLeft()
//    {
//        $this->layout = '/left.php';
//        return $this->render('login');
//    }
//
//
//
//    public function actionMail()
//    {
//        Yii::$app->mailer->compose()
//            ->setFrom('zhuwj2012@163.com')
//            ->setTo('mianbao726@163.com')
//            ->setSubject('Message subject')
//            ->setTextBody('Plain text content')
//            ->setHtmlBody('<b>HTML content</b>')
//            ->send();
//    }
//
//    public function actionLogin()
//    {
//        $this->layout = '/left.php';
//        if (!\Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginForm();
////        print_r(Yii::$app->request->post());
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
////            print_r(Yii::$app->request->post());
//            return $this->goBack();
//        } else {
//            return $this->render('login', [
//                'model' => $model,
//            ]);
//        }
//    }
//
//    public function actionLogout()
//    {
//        Yii::$app->user->logout();
//
//        return $this->goHome();
//    }
//
//    public function actionContact()
//    {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
//                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
//            } else {
//                Yii::$app->session->setFlash('error', 'There was an error sending email.');
//            }
//
//            return $this->refresh();
//        } else {
//            return $this->render('contact', [
//                'model' => $model,
//            ]);
//        }
//    }
//
//    public function actionAbout()
//    {
//        return $this->render('about');
//    }
//
//    public function actionRequestPasswordReset()
//    {
//        $model = new PasswordResetRequestForm();
//        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
//            if ($model->sendEmail()) {
//                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');
//
//                return $this->goHome();
//            } else {
//                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
//            }
//        }
//
//        return $this->render('requestPasswordResetToken', [
//            'model' => $model,
//        ]);
//    }
//
//    public function actionResetPassword($token)
//    {
//        try {
//            $model = new ResetPasswordForm($token);
//        } catch (InvalidParamException $e) {
//            throw new BadRequestHttpException($e->getMessage());
//        }
//
//        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
//            Yii::$app->getSession()->setFlash('success', 'New password was saved.');
//
//            return $this->goHome();
//        }
//
//        return $this->render('resetPassword', [
//            'model' => $model,
//        ]);
//    }
}
