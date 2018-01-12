<?php

namespace app\modules\escalero\controllers;

use Yii;
use yii\web\Controller;
use app\modules\escalero\models\AnmeldenForm;


class EscaleroController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Anmelden action.
     *
     * @return Response|string
     */
    public function actionAnmelden()
    {

        $model = new AnmeldenForm();
        if ($model->load(Yii::$app->request->post()) && $model->anmelden()) {
            return $this->goBack();
        }
        return $this->render('anmelden', [
            'model' => $model,
        ]);
    }
	

    public function actionWillkommen()
    {
        return $this->render('willkommen');
    }

}
