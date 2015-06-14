<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\BankAccountSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bank-account-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bank_id') ?>

    <?= $form->field($model, 'bank_name') ?>

    <?= $form->field($model, 'bank_address') ?>

    <?= $form->field($model, 'bank_account') ?>

    <?= $form->field($model, 'account_name') ?>

    <?php // echo $form->field($model, 'gl_account_affecting') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'default_inv_currency') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
