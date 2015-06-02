<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\setting\Models\GamLoanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Gam Loans');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Form</h1>
          <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">FORMS</a></li>
            <li class="active">Form</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        
      
      <div class="row">
        <div class="col-md-12">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a>
		<a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Create gam-loan</h3>
            </div>
            <div class="porlets-content"
<div class="gam-loan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Gam Loan'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'loan_account_no',
            'disbursement_account',
            'settlement_account',
            'loan_processing_fee',
            'disbursed_amount',
            // 'no_of_repayments',
            // 'periodic_payment',
            // 'expected_interest',
            // 'payment_source',
            // 'principal_in_arrear',
            // 'interest_in_arrear',
            // 'penalty_arrear',
            // 'interest_in_suspense',
            // 'loan_calc_method',
            // 'principal_paid_todate',
            // 'principal_remaining_todate',
            // 'total_interest_paid_todate',
            // 'ins_per_repayment',
            // 'ins_due',
            // 'ins_paid_todate',
            // 'ins_payment_method',
            // 'ins_arrears',
            // 'ins_paid_back',
            // 'nth',
            // 'last_repayment_date',
            // 'dpd',
            // 'next_repayment_date',
            // 'loan_status',
            // 'npl_flag',
            // 'npl_date',
            // 'final_repay_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div><!--/col-md-6-->
        
       
         
      </div>
      
  
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
