<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\escalero\models\Wuerfelwerte */

$this->title = 'Update Wuerfelwerte: ' . $model->wuerfelwert;
$this->params['breadcrumbs'][] = ['label' => 'Wuerfelwerte', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wuerfelwert, 'url' => ['view', 'id' => $model->wuerfelwert]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wuerfelwerte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
