<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\setting\models\AccountTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Account Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Account Type'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'account_type_code',
            'account_name',
            'account_description',
            'Is_DR_or_CR',
            'default_DR_rate',
            // 'default_CR_rate',
            // 'Is_for_office_or_customer',
            // 'Is_customer_balance',
            // 'interest_applic_cycle',
            // 'gl_sub_head',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
