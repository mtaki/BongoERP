<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\Currence */

$this->title = Yii::t('app', 'Create Currence');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Currences'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="currence-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
