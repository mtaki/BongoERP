<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\AccountCoaGrandParentSubCat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-coa-grand-parent-sub-cat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'account_grand_parent_sub_cat_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coa_grand_parent_main_cat_id')->textInput() ?>

    <?= $form->field($model, 'grand_parent_sub_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Remarks')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
