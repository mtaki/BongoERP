<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\GamLoan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gam-loan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'loan_account_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disbursement_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'settlement_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loan_processing_fee')->textInput() ?>

    <?= $form->field($model, 'disbursed_amount')->textInput() ?>

    <?= $form->field($model, 'no_of_repayments')->textInput() ?>

    <?= $form->field($model, 'periodic_payment')->textInput() ?>

    <?= $form->field($model, 'expected_interest')->textInput() ?>

    <?= $form->field($model, 'payment_source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'principal_in_arrear')->textInput() ?>

    <?= $form->field($model, 'interest_in_arrear')->textInput() ?>

    <?= $form->field($model, 'penalty_arrear')->textInput() ?>

    <?= $form->field($model, 'interest_in_suspense')->textInput() ?>

    <?= $form->field($model, 'loan_calc_method')->textInput() ?>

    <?= $form->field($model, 'principal_paid_todate')->textInput() ?>

    <?= $form->field($model, 'principal_remaining_todate')->textInput() ?>

    <?= $form->field($model, 'total_interest_paid_todate')->textInput() ?>

    <?= $form->field($model, 'ins_per_repayment')->textInput() ?>

    <?= $form->field($model, 'ins_due')->textInput() ?>

    <?= $form->field($model, 'ins_paid_todate')->textInput() ?>

    <?= $form->field($model, 'ins_payment_method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ins_arrears')->textInput() ?>

    <?= $form->field($model, 'ins_paid_back')->textInput() ?>

    <?= $form->field($model, 'nth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_repayment_date')->textInput() ?>

    <?= $form->field($model, 'dpd')->textInput() ?>

    <?= $form->field($model, 'next_repayment_date')->textInput() ?>

    <?= $form->field($model, 'loan_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npl_flag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npl_date')->textInput() ?>

    <?= $form->field($model, 'final_repay_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
