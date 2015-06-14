<?php

use yii\helpers\Html;
?>


/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\BankAccTrans */


    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

