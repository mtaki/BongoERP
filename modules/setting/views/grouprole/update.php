<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\GroupRole */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Group Role',
]) . ' ' . $model->group_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Group Roles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->group_id, 'url' => ['view', 'group_id' => $model->group_id, 'role_id' => $model->role_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="group-role-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

