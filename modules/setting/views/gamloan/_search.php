<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\GamLoanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gam-loan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'loan_account_no') ?>

    <?= $form->field($model, 'disbursement_account') ?>

    <?= $form->field($model, 'settlement_account') ?>

    <?= $form->field($model, 'loan_processing_fee') ?>

    <?= $form->field($model, 'disbursed_amount') ?>

    <?php // echo $form->field($model, 'no_of_repayments') ?>

    <?php // echo $form->field($model, 'periodic_payment') ?>

    <?php // echo $form->field($model, 'expected_interest') ?>

    <?php // echo $form->field($model, 'payment_source') ?>

    <?php // echo $form->field($model, 'principal_in_arrear') ?>

    <?php // echo $form->field($model, 'interest_in_arrear') ?>

    <?php // echo $form->field($model, 'penalty_arrear') ?>

    <?php // echo $form->field($model, 'interest_in_suspense') ?>

    <?php // echo $form->field($model, 'loan_calc_method') ?>

    <?php // echo $form->field($model, 'principal_paid_todate') ?>

    <?php // echo $form->field($model, 'principal_remaining_todate') ?>

    <?php // echo $form->field($model, 'total_interest_paid_todate') ?>

    <?php // echo $form->field($model, 'ins_per_repayment') ?>

    <?php // echo $form->field($model, 'ins_due') ?>

    <?php // echo $form->field($model, 'ins_paid_todate') ?>

    <?php // echo $form->field($model, 'ins_payment_method') ?>

    <?php // echo $form->field($model, 'ins_arrears') ?>

    <?php // echo $form->field($model, 'ins_paid_back') ?>

    <?php // echo $form->field($model, 'nth') ?>

    <?php // echo $form->field($model, 'last_repayment_date') ?>

    <?php // echo $form->field($model, 'dpd') ?>

    <?php // echo $form->field($model, 'next_repayment_date') ?>

    <?php // echo $form->field($model, 'loan_status') ?>

    <?php // echo $form->field($model, 'npl_flag') ?>

    <?php // echo $form->field($model, 'npl_date') ?>

    <?php // echo $form->field($model, 'final_repay_date') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
