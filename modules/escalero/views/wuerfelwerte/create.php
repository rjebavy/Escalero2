<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\escalero\models\Wuerfelwerte */

$this->title = 'Create Wuerfelwerte';
$this->params['breadcrumbs'][] = ['label' => 'Wuerfelwerte', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wuerfelwerte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
