<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tasks $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tasks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'taskName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priorityId')->dropDownList($taskpriority, ['prompt'=>'Select']); ?>

    <?= $form->field($model, 'statusId')->dropDownList($taskstatus, ['prompt'=>'Select']); ?>

    <?= $form->field($model, 'taskDate')->textInput(['type'=>'date']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
