<?php

namespace app\modules\escalero\controllers;

class EscaleroController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSpielerAnmelden()
    {
        return $this->render('spieler-anmelden');
    }

    public function actionWillkommen()
    {
        return $this->render('willkommen');
    }

}
