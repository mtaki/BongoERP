<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Zone */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Zone',
]) . ' ' . $model->zone_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Zones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->zone_id, 'url' => ['view', 'id' => $model->zone_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="zone-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

