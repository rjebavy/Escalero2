<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\escalero\models\Wuerfeltableau */

$this->title = 'Create Wuerfeltableau';
$this->params['breadcrumbs'][] = ['label' => 'Wuerfeltableaus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wuerfeltableau-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
