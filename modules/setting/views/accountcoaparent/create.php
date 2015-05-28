<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountCoaParent */

$this->title = Yii::t('app', 'Create Account Coa Parent');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Account Coa Parents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-coa-parent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
