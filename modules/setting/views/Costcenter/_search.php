<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\CostCenterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cost-center-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Cost_center_id') ?>

    <?= $form->field($model, 'Cost_center_name') ?>

    <?= $form->field($model, 'Cost_center_description') ?>

    <?= $form->field($model, 'date_started') ?>

    <?= $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Date_closed') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
