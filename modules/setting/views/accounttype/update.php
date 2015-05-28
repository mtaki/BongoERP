<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Account Type',
]) . ' ' . $model->account_type_code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Account Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->account_type_code, 'url' => ['view', 'id' => $model->account_type_code]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="account-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
