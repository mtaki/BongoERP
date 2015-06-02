<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\BankAccTrans */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Bank Acc Trans',
]) . ' ' . $model->banktransid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bank Acc Trans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->banktransid, 'url' => ['view', 'id' => $model->banktransid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bank-acc-trans-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

