<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\CbTransactionType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cb-transaction-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trans_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transaction_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transaction_narrative')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
