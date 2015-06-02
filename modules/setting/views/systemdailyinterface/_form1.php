<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\SystemDailyInterface */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="system-daily-interface-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Doc_trans_date')->textInput() ?>

    <?= $form->field($model, 'Doc_post_date')->textInput() ?>

    <?= $form->field($model, 'Doc_period_month')->textInput() ?>

    <?= $form->field($model, 'Doc_period_year')->textInput() ?>

    <?= $form->field($model, 'Doc_Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trans_type')->textInput() ?>

    <?= $form->field($model, 'Doc_currency')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tran_amount')->textInput() ?>

    <?= $form->field($model, 'Tran_amount_lcy')->textInput() ?>

    <?= $form->field($model, 'DR_CR_indicator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gl_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Trans_Narative')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Company_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cost_center')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Transaction_status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
