<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserLevel */

$this->title = 'Update User Level: ' . $model->user_level_id;
$this->params['breadcrumbs'][] = ['label' => 'User Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_level_id, 'url' => ['view', 'user_level_id' => $model->user_level_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-level-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
