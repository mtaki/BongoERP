<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\AccountPostingType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Account Posting Type',
]) . ' ' . $model->Doc_type_code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Account Posting Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Doc_type_code, 'url' => ['view', 'id' => $model->Doc_type_code]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="account-posting-type-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

