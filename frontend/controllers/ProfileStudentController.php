<?php
namespace frontend\controllers;


use Yii;
use common\models\UploadForm;
use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\models\Students;
use yii\data\ActiveDataProvider;
use common\models\OrganizationRequests;
use yii\filters\VerbFilter;
use frontend\models\StudentSkillProfile;

use common\models\CapacityDictionary;
/**
 * Site controller
 */
class ProfileStudentController extends Controller
{
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
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



   

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Students();
        $id=Yii::$app->user->identity->id; // id student
        $model=$model->getStudentProfiles($id);
        $model->imageFile=UploadForm::Upload($model); // lay duong dan 

            $list_StudentSkill=StudentSkillProfile::getSkill($model->getStudent($id)); // lay list skill student
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('index', [
                'model' => $model,
                'list_StudentSkill'=>$list_StudentSkill,
            ]);
        }

        return $this->render('index', [
            'model' => $model,
            'list_StudentSkill'=>$list_StudentSkill,
        ]);
    }
  

}