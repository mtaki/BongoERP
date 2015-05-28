<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountPostingType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="account-posting-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Doc_type_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Doc_type_code_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
