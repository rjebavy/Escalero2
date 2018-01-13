<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Wuerfel;



class SpielController extends Controller
{
    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
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

    /**
     * Wuerfeln action.
     *
     * @return Response|string
     */
    public function actionWuerfeln()
    {
        $model = new Wuerfel();
        if ($model->load(Yii::$app->request->post()) && $model->wuerfeln()) {
            return $this->goBack();
        }
        return $this->render('wuerfeln', [
            'model' => $model,
        ]);
    }

}
