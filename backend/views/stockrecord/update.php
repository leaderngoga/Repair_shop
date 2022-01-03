<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StockRecord */

$this->title = 'Update Stock Record: ' . $model->stock_id;
$this->params['breadcrumbs'][] = ['label' => 'Stock Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stock_id, 'url' => ['view', 'stock_id' => $model->stock_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stock-record-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
