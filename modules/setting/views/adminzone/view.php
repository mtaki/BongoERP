<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AdminZone */

$this->title = $model->zone_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admin Zones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Setting</h1>
          <h2 class="">admin-zone</h2>
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
              <h3 class="content-header"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="porlets-content"
<div class="admin-zone-view">

    

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->zone_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->zone_id], [
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
            'zone_id',
            'zone_name',
        ],
    ]) ?>

</div>

 </div><!--/col-md-6-->
        
       
         
      </div>
      
  
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
