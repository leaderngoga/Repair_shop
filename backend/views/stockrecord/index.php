<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockRecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stock Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stock-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Stock Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stock_id',
            'product_id',
            'Quantity',
            'total_price',
            'car_id',
            //'description',
            //'employee_id',
            //'date_creation',
            //'user_creation',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
