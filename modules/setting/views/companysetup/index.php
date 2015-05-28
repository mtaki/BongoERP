<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\setting\models\CompanySetupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Company Setups');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="company-setup-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Company Setup'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Parameter_ID',
            'CompanyName',
            'Company_abreviation',
            'PostalAddress',
            'Residence',
            // 'PhoneAndFax',
            // 'EmailAndWebsite:email',
            // 'CompanyLogo',
            // 'ReportFooter',
            // 'default_currency',
            // 'current_value_per_share',
            // 'loan_computation_method',
            // 'monthly_rate_for_Basic_method',
            // 'chairman',
            // 'secretary',
            // 'treasurer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
