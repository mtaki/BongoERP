 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\VendorMaster */
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
              <h3 class="content-header">Create vendor-master</h3>
            </div>
            <div class="porlets-content">
           


<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

			
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Vendor sub gl</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendor_sub_gl')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Vendor type idd</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendor_type_idd')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Vendor name</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendor_name')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Vendor addres</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendor_addres')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Vendor industry</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendor_industry')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Vendor telefone</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendor_telefone')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Vendors email</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendors_email')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Vendors bank</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendors_bank')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Vendors account no</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendors_account_no')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Vendors other terms</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendors_other_terms')->textInput(['maxlength' => true])->label('') ?>			</div>
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
