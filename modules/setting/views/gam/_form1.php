<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Gam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_opened')->textInput() ?>

    <?= $form->field($model, 'balance_is_DR_CR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cleared_balance')->textInput() ?>

    <?= $form->field($model, 'DR_int_rate')->textInput() ?>

    <?= $form->field($model, 'CR_int_rate')->textInput() ?>

    <?= $form->field($model, 'currency_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accr_dr_amount')->textInput() ?>

    <?= $form->field($model, 'accr_cr_amount')->textInput() ?>

    <?= $form->field($model, 'applied_dr_int_todate')->textInput() ?>

    <?= $form->field($model, 'applied_cr_int_todate')->textInput() ?>

    <?= $form->field($model, 'freez_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'freez_date')->textInput() ?>

    <?= $form->field($model, 'account_close_flag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_close_date')->textInput() ?>

    <?= $form->field($model, 'last_tran_date')->textInput() ?>

    <?= $form->field($model, 'total_dr_trans')->textInput() ?>

    <?= $form->field($model, 'total_cr_trans')->textInput() ?>

    <?= $form->field($model, 'source_of_funds')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wtax_flag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wtax_percent')->textInput() ?>

    <?= $form->field($model, 'wtax_amount')->textInput() ?>

    <?= $form->field($model, 'source_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IBAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'freez_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'portifolio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'documents_attached')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
