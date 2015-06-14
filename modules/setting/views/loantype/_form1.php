<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\LoanType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loan-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'loan_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interest_rate')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
