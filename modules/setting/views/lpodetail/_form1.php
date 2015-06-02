<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\LpoDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lpo-detail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lpo_id')->textInput() ?>

    <?= $form->field($model, 'purchase_type_list_id')->textInput() ?>

    <?= $form->field($model, 'cost_center')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'released')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correct_category')->textInput() ?>

    <?= $form->field($model, 'like_invoice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'received')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_gl')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
