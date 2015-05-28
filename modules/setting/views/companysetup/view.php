<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\CompanySetup */

$this->title = $model->Parameter_ID;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Company Setups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-setup-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->Parameter_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->Parameter_ID], [
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
            'Parameter_ID',
            'CompanyName',
            'Company_abreviation',
            'PostalAddress',
            'Residence',
            'PhoneAndFax',
            'EmailAndWebsite:email',
            'CompanyLogo',
            'ReportFooter',
            'default_currency',
            'current_value_per_share',
            'loan_computation_method',
            'monthly_rate_for_Basic_method',
            'chairman',
            'secretary',
            'treasurer',
        ],
    ]) ?>

</div>
