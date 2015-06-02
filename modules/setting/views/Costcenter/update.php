<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\CostCenter */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cost Center',
]) . ' ' . $model->Cost_center_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cost Centers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Cost_center_id, 'url' => ['view', 'id' => $model->Cost_center_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cost-center-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

