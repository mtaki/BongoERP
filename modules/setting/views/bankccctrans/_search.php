<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\BankAccTransSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bank-acc-trans-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'banktransid') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'transno') ?>

    <?= $form->field($model, 'bankact') ?>

    <?= $form->field($model, 'ref') ?>

    <?php // echo $form->field($model, 'amountcleared') ?>

    <?php // echo $form->field($model, 'exrate') ?>

    <?php // echo $form->field($model, 'functionalexrate') ?>

    <?php // echo $form->field($model, 'transdate') ?>

    <?php // echo $form->field($model, 'banktranstype') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'currcode') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
