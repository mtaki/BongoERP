<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\setting\models\AccountTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Account Types');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Setting</h1>
          <h2 class="">account-type</h2>
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
              <div class="actions"> 
				<a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a>
				<a class="close-down" href="#"><i class="fa fa-times"></i></a> 
			   </div>
              <h3 class="content-header">View </h3>
            </div>
            <div class="porlets-content">
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

        </div><!--/col-md-6-->
        
       
         
      </div>
      
  
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
