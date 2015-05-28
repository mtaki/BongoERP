<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\CompanySetup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Parameter_ID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CompanyName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Company_abreviation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PostalAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Residence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PhoneAndFax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EmailAndWebsite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CompanyLogo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ReportFooter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'default_currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_value_per_share')->textInput() ?>

    <?= $form->field($model, 'loan_computation_method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monthly_rate_for_Basic_method')->textInput() ?>

    <?= $form->field($model, 'chairman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secretary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'treasurer')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
