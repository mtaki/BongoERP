<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\FixedAssetsMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fixed-assets-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'asset_id') ?>

    <?= $form->field($model, 'barcode_no') ?>

    <?= $form->field($model, 'asset_type') ?>

    <?= $form->field($model, 'manufacturer') ?>

    <?= $form->field($model, 'accuisation_price') ?>

    <?php // echo $form->field($model, 'current_value_dep') ?>

    <?php // echo $form->field($model, 'current_value_market') ?>

    <?php // echo $form->field($model, 'depreciation_rate') ?>

    <?php // echo $form->field($model, 'expected_life_years') ?>

    <?php // echo $form->field($model, 'supplier_vendor') ?>

    <?php // echo $form->field($model, 'accusation_date') ?>

    <?php // echo $form->field($model, 'cost_center') ?>

    <?php // echo $form->field($model, 'assigned_to') ?>

    <?php // echo $form->field($model, 'asset_status') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'verified_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
