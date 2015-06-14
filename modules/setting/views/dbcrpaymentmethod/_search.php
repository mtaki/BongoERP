<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\DbCrPaymentmethodSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="db-cr-paymentmethod-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'paymentid') ?>

    <?= $form->field($model, 'paymentname') ?>

    <?= $form->field($model, 'paymenttype') ?>

    <?= $form->field($model, 'receipttype') ?>

    <?= $form->field($model, 'usepreprintedstationery') ?>

    <?php // echo $form->field($model, 'opencashdrawer') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
