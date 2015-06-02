<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\LpoDetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lpo-detail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lpo_id') ?>

    <?= $form->field($model, 'purchase_type_list_id') ?>

    <?= $form->field($model, 'cost_center') ?>

    <?= $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'manufacturer') ?>

    <?php // echo $form->field($model, 'released') ?>

    <?php // echo $form->field($model, 'correct_category') ?>

    <?php // echo $form->field($model, 'like_invoice') ?>

    <?php // echo $form->field($model, 'received') ?>

    <?php // echo $form->field($model, 'payed') ?>

    <?php // echo $form->field($model, 'update_gl') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
