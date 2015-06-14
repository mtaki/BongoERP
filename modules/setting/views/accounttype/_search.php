<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountTypeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-type-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'account_type_code') ?>

    <?= $form->field($model, 'account_name') ?>

    <?= $form->field($model, 'account_description') ?>

    <?= $form->field($model, 'Is_DR_or_CR') ?>

    <?= $form->field($model, 'default_DR_rate') ?>

    <?php // echo $form->field($model, 'default_CR_rate') ?>

    <?php // echo $form->field($model, 'Is_for_office_or_customer') ?>

    <?php // echo $form->field($model, 'Is_customer_balance') ?>

    <?php // echo $form->field($model, 'interest_applic_cycle') ?>

    <?php // echo $form->field($model, 'gl_sub_head') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
