 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\ChartOfAccount */
/* @var $form yii\widgets\ActiveForm */
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
              <h3 class="content-header">Create chart-of-account</h3>
            </div>
            <div class="porlets-content">
           


<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

			
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Account no</label>
           <div class="col-sm-4">
			<?= $form->field($model,'account_no')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Account name</label>
           <div class="col-sm-4">
			<?= $form->field($model,'account_name')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Gl account coa parent id</label>
           <div class="col-sm-4">
			<?= $form->field($model,'gl_account_coa_parent_id')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Status</label>
           <div class="col-sm-4">
			<?= $form->field($model,'status')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
				
	  <div class="bottom">
		 <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?php ActiveForm::end(); ?>
  
 
            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
        

</div>
      </div>
      
  
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
