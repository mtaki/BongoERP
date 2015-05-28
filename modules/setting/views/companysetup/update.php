<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\CompanySetup */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Company Setup',
]) . ' ' . $model->Parameter_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Company Setups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Parameter_ID, 'url' => ['view', 'id' => $model->Parameter_ID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="company-setup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
