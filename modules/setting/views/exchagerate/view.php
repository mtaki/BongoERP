<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\Exchagerate */

$this->title = $model->currency_code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Exchagerates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchagerate-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->currency_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->currency_code], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'currency_code',
            'exchange_rate',
            'rate_decimal',
        ],
    ]) ?>

</div>
