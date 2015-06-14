<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\GamLoan */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Gam Loan',
]) . ' ' . $model->loan_account_no;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gam Loans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->loan_account_no, 'url' => ['view', 'id' => $model->loan_account_no]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="gam-loan-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

