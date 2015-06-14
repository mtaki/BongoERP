<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\CbXrate */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cb Xrate',
]) . ' ' . $model->currency_code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cb Xrates'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->currency_code, 'url' => ['view', 'id' => $model->currency_code]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Setting</h1>
          <h2 class="">cb-xrate</h2>
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
              <h3 class="content-header"><?= Html::encode($this->title) ?> </h3>
            </div>
            <div class="porlets-content">
	<div class="cb-xrate-index">

	
		<p><?= Html::a(Yii::t('app', 'Create Cb Xrate'), ['create'], ['class' => 'btn btn-success']) ?></p>
		<?= $this->render('_form', [ 'model' => $model,]) ?>
	</div><!--/col-md-6-->
	</div>
   </div>
      <!--\\\\\\\ container  end \\\\\\-->
 </div>
    <!--\\\\\\\ content panel end \\\\\\-->

	
	
