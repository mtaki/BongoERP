<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\GlFixedAssetsType */

$this->title = Yii::t('app', 'Create Gl Fixed Assets Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gl Fixed Assets Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gl-fixed-assets-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
