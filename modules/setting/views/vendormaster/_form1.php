<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\VendorMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendor-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vendor_sub_gl')->textInput() ?>

    <?= $form->field($model, 'vendor_type_idd')->textInput() ?>

    <?= $form->field($model, 'vendor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_addres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_industry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendors_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendors_bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendors_account_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendors_other_terms')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
