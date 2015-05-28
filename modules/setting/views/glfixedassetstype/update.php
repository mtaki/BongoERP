<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\GlFixedAssetsType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Gl Fixed Assets Type',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gl Fixed Assets Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->sub_ledger_no]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="gl-fixed-assets-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
