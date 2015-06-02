<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\GlZone */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gl-zone-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'zone_id')->textInput() ?>

    <?= $form->field($model, 'zone_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zone_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
