<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\FixedAssetsMaster */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Fixed Assets Master',
]) . ' ' . $model->asset_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Fixed Assets Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->asset_id, 'url' => ['view', 'id' => $model->asset_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="fixed-assets-master-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

