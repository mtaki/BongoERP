<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\Regions */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Regions',
]) . ' ' . $model->Region_Id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Regions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Region_Id, 'url' => ['view', 'id' => $model->Region_Id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="regions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
