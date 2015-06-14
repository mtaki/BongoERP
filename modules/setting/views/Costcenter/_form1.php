<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\CostCenter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cost-center-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Cost_center_id')->textInput() ?>

    <?= $form->field($model, 'Cost_center_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cost_center_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_started')->textInput() ?>

    <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Date_closed')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
