<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\DbCrPaymentmethod */

$this->title = $model->paymentid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Db Cr Paymentmethods'), 'url' => ['index']];
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
              <h3 class="content-header">Create users</h3>
            </div>
            <div class="porlets-content"
<div class="db-cr-paymentmethod-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->paymentid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->paymentid], [
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
            'paymentid',
            'paymentname',
            'paymenttype',
            'receipttype',
            'usepreprintedstationery',
            'opencashdrawer',
        ],
    ]) ?>

</div>

 </div><!--/col-md-6-->
        
       
         
      </div>
      
  
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->