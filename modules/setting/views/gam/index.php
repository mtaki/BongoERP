<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\setting\Models\GamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Gams');
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
              <h3 class="content-header">Create gam</h3>
            </div>
            <div class="porlets-content"
<div class="gam-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Gam'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'account_no',
            'product_code',
            'customer_no',
            'account_name',
            'branch_id',
            // 'date_opened',
            // 'balance_is_DR_CR',
            // 'cleared_balance',
            // 'DR_int_rate',
            // 'CR_int_rate',
            // 'currency_code',
            // 'accr_dr_amount',
            // 'accr_cr_amount',
            // 'applied_dr_int_todate',
            // 'applied_cr_int_todate',
            // 'freez_status',
            // 'freez_date',
            // 'account_close_flag',
            // 'account_close_date',
            // 'last_tran_date',
            // 'total_dr_trans',
            // 'total_cr_trans',
            // 'source_of_funds',
            // 'wtax_flag',
            // 'wtax_percent',
            // 'wtax_amount',
            // 'source_account',
            // 'IBAN',
            // 'freez_reason:ntext',
            // 'portifolio',
            // 'documents_attached',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div><!--/col-md-6-->
        
       
         
      </div>
      
  
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
