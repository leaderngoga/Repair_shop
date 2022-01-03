<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeesFunction */

$this->title = 'Create Employees Function';
$this->params['breadcrumbs'][] = ['label' => 'Employees Functions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-function-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
