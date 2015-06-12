<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_type_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Is_DR_or_CR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'default_DR_rate')->textInput() ?>

    <?= $form->field($model, 'default_CR_rate')->textInput() ?>

    <?= $form->field($model, 'Is_for_office_or_customer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Is_customer_balance')->textInput() ?>

    <?= $form->field($model, 'interest_applic_cycle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gl_sub_head')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
