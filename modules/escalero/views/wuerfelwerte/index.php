<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\escalero\models\WuerfelwerteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wuerfelwertes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wuerfelwerte-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Wuerfelwerte', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'wuerfelwert',
            'wuerfelbild',
            'bedeutung',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
