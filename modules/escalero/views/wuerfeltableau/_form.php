<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\escalero\models\Wuerfeltableau */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wuerfeltableau-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wert')->textInput() ?>

    <?= $form->field($model, 'bild')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'halten')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
