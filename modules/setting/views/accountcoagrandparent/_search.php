<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountCoaGrandParentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-coa-grand-parent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'account_grand_parent_code') ?>

    <?= $form->field($model, 'coa_grand_parent_sub_cat_id') ?>

    <?= $form->field($model, 'grand_parent_name') ?>

    <?= $form->field($model, 'Remarks') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
