<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\DbCrTransSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="db-cr-trans-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Tran_id') ?>

    <?= $form->field($model, 'tran_date') ?>

    <?= $form->field($model, 'vendor_customer_no') ?>

    <?= $form->field($model, 'park_date') ?>

    <?= $form->field($model, 'post_date') ?>

    <?php // echo $form->field($model, 'parked_by') ?>

    <?php // echo $form->field($model, 'posted_by') ?>

    <?php // echo $form->field($model, 'trans_status') ?>

    <?php // echo $form->field($model, 'tran_refference') ?>

    <?php // echo $form->field($model, 'trans_amount') ?>

    <?php // echo $form->field($model, 'trans_currency') ?>

    <?php // echo $form->field($model, 'cr_dr_indicator') ?>

    <?php // echo $form->field($model, 'gl_account') ?>

    <?php // echo $form->field($model, 'inv_number') ?>

    <?php // echo $form->field($model, 'payment_method') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
