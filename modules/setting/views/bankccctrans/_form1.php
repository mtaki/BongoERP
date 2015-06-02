<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\BankAccTrans */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bank-acc-trans-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'transno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bankact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amountcleared')->textInput() ?>

    <?= $form->field($model, 'exrate')->textInput() ?>

    <?= $form->field($model, 'functionalexrate')->textInput() ?>

    <?= $form->field($model, 'transdate')->textInput() ?>

    <?= $form->field($model, 'banktranstype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'currcode')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
