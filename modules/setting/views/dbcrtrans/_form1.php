<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\DbCrTrans */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="db-cr-trans-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tran_id')->textInput() ?>

    <?= $form->field($model, 'tran_date')->textInput() ?>

    <?= $form->field($model, 'vendor_customer_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'park_date')->textInput() ?>

    <?= $form->field($model, 'post_date')->textInput() ?>

    <?= $form->field($model, 'parked_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'posted_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trans_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tran_refference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trans_amount')->textInput() ?>

    <?= $form->field($model, 'trans_currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cr_dr_indicator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gl_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inv_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_method')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
