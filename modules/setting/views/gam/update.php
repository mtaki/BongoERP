<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Gam */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Gam',
]) . ' ' . $model->account_no;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->account_no, 'url' => ['view', 'id' => $model->account_no]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="gam-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

