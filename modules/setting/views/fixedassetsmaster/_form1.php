<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\FixedAssetsMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fixed-assets-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'barcode_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_type')->textInput() ?>

    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accuisation_price')->textInput() ?>

    <?= $form->field($model, 'current_value_dep')->textInput() ?>

    <?= $form->field($model, 'current_value_market')->textInput() ?>

    <?= $form->field($model, 'depreciation_rate')->textInput() ?>

    <?= $form->field($model, 'expected_life_years')->textInput() ?>

    <?= $form->field($model, 'supplier_vendor')->textInput() ?>

    <?= $form->field($model, 'accusation_date')->textInput() ?>

    <?= $form->field($model, 'cost_center')->textInput() ?>

    <?= $form->field($model, 'assigned_to')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'verified_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
