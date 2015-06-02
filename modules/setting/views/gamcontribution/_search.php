<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\GamContributionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gam-contribution-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'account_no') ?>

    <?= $form->field($model, 'customer_id') ?>

    <?= $form->field($model, 'monthly_contribution') ?>

    <?= $form->field($model, 'cumulative_contribution') ?>

    <?= $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'contribution_source') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
