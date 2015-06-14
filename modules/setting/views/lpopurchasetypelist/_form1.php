<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\LpoPurchaseTypeList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lpo-purchase-type-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'purchase_type_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_gl')->textInput() ?>

    <?= $form->field($model, 'coa_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
