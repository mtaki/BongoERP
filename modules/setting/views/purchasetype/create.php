<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\PurchaseType */

$this->title = Yii::t('app', 'Create Purchase Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Purchase Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
