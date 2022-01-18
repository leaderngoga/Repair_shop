<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'product_id',
            'product_name',
            'Description',
            'category_id',
            [
                'attribute'=>'date_creation',
                'format'=>['datetime'],
                'contentOptions'=>['style'=>'white-space:nowrap']
            ],
            'user_creation',
            [
                'attribute'=> 'status',
                'content'=>function ($model){
                    /**@var \common\models\categories $model */
                    return HTML::tag('span',$model->status? 'Active' :'Draft',[
                            'class'=>$model->status? 'badge badge-success' :'badge badge-danger'
                    ]);
                },
                'contentOptions'=>[
                    'style'=>'width:80px'
                ]
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
