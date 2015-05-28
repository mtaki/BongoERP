<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\Usagegroup */

$this->title = Yii::t('app', 'Create Usagegroup');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Usagegroups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usagegroup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
