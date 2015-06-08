<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\FixedAssetsType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Fixed Assets Type',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fixed Assets Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->sub_ledger_no]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="fixed-assets-type-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

