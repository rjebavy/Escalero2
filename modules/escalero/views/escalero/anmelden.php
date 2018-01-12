<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\modules\escalero\models\AnmeldenForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Bei Escalero anmelden';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Bitte untenstehendes Feld ausfüllen um Anzumelden:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'anmelden-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'spitzname')->textInput(['autofocus' => true]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Anmelden', ['class' => 'btn btn-primary', 'name' => 'anmelden-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        Bitte melden Sie sich mit einem beliebigen Spitznamen an damit ihr Spielergebnis in die Bestenliste eingetragen werden kann.
		Wenn sie sich nicht anmelden werden sie als Spieler 'Anonym' geführt und Ihr Ergebnis kommt nicht in die Bestenliste.
    </div>
</div>
