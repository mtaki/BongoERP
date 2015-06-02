<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\ApLpoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ap-lpo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lpo_number') ?>

    <?= $form->field($model, 'vendor_master_id') ?>

    <?= $form->field($model, 'lpo_date') ?>

    <?= $form->field($model, 'purchase_type') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'released_by') ?>

    <?php // echo $form->field($model, 'released_date') ?>

    <?php // echo $form->field($model, 'goods_received') ?>

    <?php // echo $form->field($model, 'receipt_date') ?>

    <?php // echo $form->field($model, 'received_by') ?>

    <?php // echo $form->field($model, 'lpo_match_invoice') ?>

    <?php // echo $form->field($model, 'payment_done') ?>

    <?php // echo $form->field($model, 'payment_date') ?>

    <?php // echo $form->field($model, 'Total_amount') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
