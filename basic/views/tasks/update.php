<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tasks $model */

$this->title = 'Update Tasks: ' . $model->taskName;
$this->params['breadcrumbs'][] = ['label' => 'Tasks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->taskId, 'url' => ['view', 'taskId' => $model->taskId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tasks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
