<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\CompanySetupSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-setup-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Parameter_ID') ?>

    <?= $form->field($model, 'CompanyName') ?>

    <?= $form->field($model, 'Company_abreviation') ?>

    <?= $form->field($model, 'PostalAddress') ?>

    <?= $form->field($model, 'Residence') ?>

    <?php // echo $form->field($model, 'PhoneAndFax') ?>

    <?php // echo $form->field($model, 'EmailAndWebsite') ?>

    <?php // echo $form->field($model, 'CompanyLogo') ?>

    <?php // echo $form->field($model, 'ReportFooter') ?>

    <?php // echo $form->field($model, 'default_currency') ?>

    <?php // echo $form->field($model, 'current_value_per_share') ?>

    <?php // echo $form->field($model, 'loan_computation_method') ?>

    <?php // echo $form->field($model, 'monthly_rate_for_Basic_method') ?>

    <?php // echo $form->field($model, 'chairman') ?>

    <?php // echo $form->field($model, 'secretary') ?>

    <?php // echo $form->field($model, 'treasurer') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
