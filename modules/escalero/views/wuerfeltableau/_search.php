<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\escalero\models\WuerfeltableauSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wuerfeltableau-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'wuerfel') ?>

    <?= $form->field($model, 'wert') ?>

    <?= $form->field($model, 'bild') ?>

    <?= $form->field($model, 'halten') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
