<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\ApLpo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ap-lpo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lpo_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_master_id')->textInput() ?>

    <?= $form->field($model, 'lpo_date')->textInput() ?>

    <?= $form->field($model, 'purchase_type')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'released_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'released_date')->textInput() ?>

    <?= $form->field($model, 'goods_received')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipt_date')->textInput() ?>

    <?= $form->field($model, 'received_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lpo_match_invoice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_done')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment_date')->textInput() ?>

    <?= $form->field($model, 'Total_amount')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
