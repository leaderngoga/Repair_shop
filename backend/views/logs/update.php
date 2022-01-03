<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Logs */

$this->title = 'Update Logs: ' . $model->log_id;
$this->params['breadcrumbs'][] = ['label' => 'Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->log_id, 'url' => ['view', 'log_id' => $model->log_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="logs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
