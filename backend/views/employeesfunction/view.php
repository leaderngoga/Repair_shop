<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeesFunction */

$this->title = $model->employees_function_id;
$this->params['breadcrumbs'][] = ['label' => 'Employees Functions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="employees-function-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'employees_function_id' => $model->employees_function_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'employees_function_id' => $model->employees_function_id], [
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
            'employees_function_id',
            'function',
            'date_creation',
            'user_creation',
            'status',
        ],
    ]) ?>

</div>
