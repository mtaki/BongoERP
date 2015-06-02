<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\AccountCoaParent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-coa-parent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_parent_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gl_account_coa_grand_parent_id')->textInput() ?>

    <?= $form->field($model, 'parent_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Remarks')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
