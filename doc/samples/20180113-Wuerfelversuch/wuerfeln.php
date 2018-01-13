<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\Wuerfel */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm; 
use app\models\Wuerfel;

$this->title = 'Wuerfeln';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wuerfeln">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Bitte würfeln bzw. halten und würfeln. </p>

    <?php $form = ActiveForm::begin([
        'id' => 'wuerfeln-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'bild') ?>

        <?= $form->field($model, 'halten')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::button('Wuerfeln', ['class' => 'btn btn-primary', 'name' => 'wuerfel-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        Was auch immer für ein Anleitungstext?  Was auch immer für ein Anleitungstext? <br>
		Was auch immer für ein Anleitungstext? Was auch immer für ein Anleitungstext? 
    </div>
</div>
