<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\UserMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Menu_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linked_role')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
