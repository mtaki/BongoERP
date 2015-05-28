<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\Exchagerate */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Exchagerate',
]) . ' ' . $model->currency_code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Exchagerates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->currency_code, 'url' => ['view', 'id' => $model->currency_code]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="exchagerate-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
