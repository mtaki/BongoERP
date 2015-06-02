<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\BankAccount */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Bank Account',
]) . ' ' . $model->gl_account_affecting;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bank Accounts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gl_account_affecting, 'url' => ['view', 'id' => $model->gl_account_affecting]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bank-account-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

