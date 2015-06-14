<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\DbCrPaymentmethod */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="db-cr-paymentmethod-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'paymentname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'paymenttype')->textInput() ?>

    <?= $form->field($model, 'receipttype')->textInput() ?>

    <?= $form->field($model, 'usepreprintedstationery')->textInput() ?>

    <?= $form->field($model, 'opencashdrawer')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
