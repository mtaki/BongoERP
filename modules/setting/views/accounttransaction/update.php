<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\AccountTransaction */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Account Transaction',
]) . ' ' . $model->Document_no;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Account Transactions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Document_no, 'url' => ['view', 'id' => $model->Document_no]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="account-transaction-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

