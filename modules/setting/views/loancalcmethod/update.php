<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\LoanCalcMethod */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Loan Calc Method',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Loan Calc Methods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="loan-calc-method-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

