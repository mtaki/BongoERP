<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountPostingType */

$this->title = Yii::t('app', 'Create Account Posting Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Account Posting Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-posting-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
