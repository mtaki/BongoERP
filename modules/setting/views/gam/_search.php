<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\GamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gam-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'account_no') ?>

    <?= $form->field($model, 'product_code') ?>

    <?= $form->field($model, 'customer_no') ?>

    <?= $form->field($model, 'account_name') ?>

    <?= $form->field($model, 'branch_id') ?>

    <?php // echo $form->field($model, 'date_opened') ?>

    <?php // echo $form->field($model, 'balance_is_DR_CR') ?>

    <?php // echo $form->field($model, 'cleared_balance') ?>

    <?php // echo $form->field($model, 'DR_int_rate') ?>

    <?php // echo $form->field($model, 'CR_int_rate') ?>

    <?php // echo $form->field($model, 'currency_code') ?>

    <?php // echo $form->field($model, 'accr_dr_amount') ?>

    <?php // echo $form->field($model, 'accr_cr_amount') ?>

    <?php // echo $form->field($model, 'applied_dr_int_todate') ?>

    <?php // echo $form->field($model, 'applied_cr_int_todate') ?>

    <?php // echo $form->field($model, 'freez_status') ?>

    <?php // echo $form->field($model, 'freez_date') ?>

    <?php // echo $form->field($model, 'account_close_flag') ?>

    <?php // echo $form->field($model, 'account_close_date') ?>

    <?php // echo $form->field($model, 'last_tran_date') ?>

    <?php // echo $form->field($model, 'total_dr_trans') ?>

    <?php // echo $form->field($model, 'total_cr_trans') ?>

    <?php // echo $form->field($model, 'source_of_funds') ?>

    <?php // echo $form->field($model, 'wtax_flag') ?>

    <?php // echo $form->field($model, 'wtax_percent') ?>

    <?php // echo $form->field($model, 'wtax_amount') ?>

    <?php // echo $form->field($model, 'source_account') ?>

    <?php // echo $form->field($model, 'IBAN') ?>

    <?php // echo $form->field($model, 'freez_reason') ?>

    <?php // echo $form->field($model, 'portifolio') ?>

    <?php // echo $form->field($model, 'documents_attached') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
