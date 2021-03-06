<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\LpoPurchaseTypeListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lpo-purchase-type-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'purchase_type_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'sub_gl') ?>

    <?= $form->field($model, 'coa_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
