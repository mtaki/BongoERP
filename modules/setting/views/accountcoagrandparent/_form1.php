<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountCoaGrandParent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-coa-grand-parent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_grand_parent_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coa_grand_parent_sub_cat_id')->textInput() ?>

    <?= $form->field($model, 'grand_parent_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Remarks')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
