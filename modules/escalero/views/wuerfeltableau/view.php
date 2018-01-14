<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\escalero\models\Wuerfeltableau */

$this->title = $model->wuerfel;
$this->params['breadcrumbs'][] = ['label' => 'Wuerfeltableau', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wuerfeltableau-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->wuerfel], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->wuerfel], [
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
            'wuerfel',
            'wert',
            'bild',
            'halten',
        ],
    ]) ?>

</div>
