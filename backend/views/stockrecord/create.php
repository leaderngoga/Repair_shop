<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\StockRecord */

$this->title = 'Create Stock Record';
$this->params['breadcrumbs'][] = ['label' => 'Stock Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
