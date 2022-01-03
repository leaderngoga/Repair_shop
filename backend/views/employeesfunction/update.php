<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeesFunction */

$this->title = 'Update Employees Function: ' . $model->employees_function_id;
$this->params['breadcrumbs'][] = ['label' => 'Employees Functions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->employees_function_id, 'url' => ['view', 'employees_function_id' => $model->employees_function_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employees-function-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
