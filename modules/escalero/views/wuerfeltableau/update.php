<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\escalero\models\Wuerfeltableau */

$this->title = 'Update Wuerfeltableau: ' . $model->wuerfel;
$this->params['breadcrumbs'][] = ['label' => 'Wuerfeltableau', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wuerfel, 'url' => ['view', 'id' => $model->wuerfel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wuerfeltableau-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
