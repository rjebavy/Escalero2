<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\escalero\models\Wuerfelwerte */

$this->title = $model->wuerfelwert;
$this->params['breadcrumbs'][] = ['label' => 'Wuerfelwerte', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wuerfelwerte-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->wuerfelwert], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->wuerfelwert], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'wuerfelwert',
            'wuerfelbild',
            'bedeutung',
        ],
    ]) ?>

</div>
