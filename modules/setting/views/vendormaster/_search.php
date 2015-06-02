<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\VendorMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendor-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'vendor_sub_gl') ?>

    <?= $form->field($model, 'vendor_type_idd') ?>

    <?= $form->field($model, 'vendor_name') ?>

    <?= $form->field($model, 'vendor_addres') ?>

    <?php // echo $form->field($model, 'vendor_industry') ?>

    <?php // echo $form->field($model, 'vendor_telefone') ?>

    <?php // echo $form->field($model, 'vendors_email') ?>

    <?php // echo $form->field($model, 'vendors_bank') ?>

    <?php // echo $form->field($model, 'vendors_account_no') ?>

    <?php // echo $form->field($model, 'vendors_other_terms') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
