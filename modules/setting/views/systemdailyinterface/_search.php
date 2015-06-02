<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\SystemDailyInterfaceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="system-daily-interface-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Doc_trans_date') ?>

    <?= $form->field($model, 'Doc_post_date') ?>

    <?= $form->field($model, 'Doc_period_month') ?>

    <?= $form->field($model, 'Doc_period_year') ?>

    <?php // echo $form->field($model, 'Doc_Type') ?>

    <?php // echo $form->field($model, 'trans_type') ?>

    <?php // echo $form->field($model, 'Doc_currency') ?>

    <?php // echo $form->field($model, 'Tran_amount') ?>

    <?php // echo $form->field($model, 'Tran_amount_lcy') ?>

    <?php // echo $form->field($model, 'DR_CR_indicator') ?>

    <?php // echo $form->field($model, 'gl_account') ?>

    <?php // echo $form->field($model, 'Trans_Narative') ?>

    <?php // echo $form->field($model, 'Company_code') ?>

    <?php // echo $form->field($model, 'Cost_center') ?>

    <?php // echo $form->field($model, 'Transaction_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
