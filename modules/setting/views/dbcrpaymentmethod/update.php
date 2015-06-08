<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\DbCrPaymentmethod */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Db Cr Paymentmethod',
]) . ' ' . $model->paymentid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Db Cr Paymentmethods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->paymentid, 'url' => ['view', 'id' => $model->paymentid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="db-cr-paymentmethod-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

