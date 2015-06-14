<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\DbCrTrans */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Db Cr Trans',
]) . ' ' . $model->Tran_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Db Cr Trans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Tran_id, 'url' => ['view', 'id' => $model->Tran_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="db-cr-trans-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

