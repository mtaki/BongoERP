<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\TransactionType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Transaction Type',
]) . ' ' . $model->trans_code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Transaction Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->trans_code, 'url' => ['view', 'id' => $model->trans_code]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="transaction-type-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

