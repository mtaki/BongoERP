<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountCoaParentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-coa-parent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'account_parent_code') ?>

    <?= $form->field($model, 'gl_account_coa_grand_parent_id') ?>

    <?= $form->field($model, 'parent_name') ?>

    <?= $form->field($model, 'Remarks') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
