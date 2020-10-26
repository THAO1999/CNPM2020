<?php
namespace frontend\controllers;


use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\CapacityDictionary;
use yii\data\ActiveDataProvider;
use common\models\OrganizationRequests;
use frontend\models\Enterprises;
use  common\models\OrganizationRequestAbilities;
/**
 * Site controller
 */
class DetailRequestEnterpriseController extends Controller
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
    public function actionIndex()
    {
        $id=183;

        $capacity=CapacityDictionary::find()->all();
        $organization_requests=OrganizationRequests::findOne($id);  
        $enterprise=Enterprises::getEnterpriseProfiles($organization_requests->organization_id);
        $lisSkill=OrganizationRequestAbilities::getSkill($organization_requests); // lay list skill student
       // phpinfo();
        return $this->render('index', [
            //'capacity' => $capacity,
            'organization_requests'=>$organization_requests,
            'enterprise'=>$enterprise,
            'lisSkill'=>$lisSkill,
        ]);
     
    }

 
}