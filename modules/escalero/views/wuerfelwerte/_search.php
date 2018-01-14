<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\escalero\models\WuerfelwerteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wuerfelwerte-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'wuerfelwert') ?>

    <?= $form->field($model, 'wuerfelbild') ?>

    <?= $form->field($model, 'bedeutung') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
