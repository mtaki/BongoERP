 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountType */
/* @var $form yii\widgets\ActiveForm */
?>



<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

		<div class="form-group">
		   <label class="col-sm-2 control-label">Account type code</label>
           <div class="col-sm-2">
			<?= $form->field($model,'account_type_code')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
		<div class="clear_both"></div>		
		<div class="form-group">
		   <label class="col-sm-2 control-label">Account name</label>
           <div class="col-sm-4">
			<?= $form->field($model,'account_name')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
			<div class="clear_both"></div>		
		<div class="form-group">
		   <label class="col-sm-2 control-label">Account description</label>
           <div class="col-sm-4">
			<?= $form->field($model,'account_description')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
		<div class="clear_both"></div>		
		<div class="form-group">
		   <label class="col-sm-2 control-label">Is DR or CR</label>
           <div class="col-sm-4">
			<?= $form->field($model,'Is_DR_or_CR')->radioList(['1' => 'DR','2'=>'CR'])->label('') ?>			</div>
		</div><!--/form-group-->
		
						<div class="clear_both"></div>	
						
		<div class="form-group">
		   <label class="col-sm-2 control-label">Default DR rate</label>
           <div class="col-sm-1">
			<?= $form->field($model,'default_DR_rate')->textInput(['maxlength' => true,'width'=>'20px'])->label('') ?>			</div>
		</div><!--/form-group-->
				
		<div class="form-group">
		   <label class="col-sm-2 control-label">Default CR rate</label>
           <div class="col-sm-1">
			<?= $form->field($model,'default_CR_rate')->textInput(['size'=>'10px'])->label('') ?>			</div>
		</div><!--/form-group-->
						<div class="clear_both"></div>			
		<div class="form-group">
		   <label class="col-sm-2 control-label">Is for office or customer</label>
           <div class="col-sm-1">
			<?= $form->field($model,'Is_for_office_or_customer')->dropdownList(['1' =>'Yes',0=>'No'])->label('') ?>			</div>
		</div><!--/form-group-->
				
		<div class="form-group">
		   <label class="col-sm-1 control-label">Is customer balance</label>
           <div class="col-sm-2">
			<?= $form->field($model,'Is_customer_balance')->dropDownList(['1' =>'Yes',0=>'No'],['prompt'=>'Choose...'])->label('') ?>			</div>
		</div><!--/form-group-->
			<div class="clear_both"></div>
			
		<div class="form-group">
		   <label class="col-sm-2 control-label">Interest applic cycle</label>
           <div class="col-sm-4">
			<?= $form->field($model,'interest_applic_cycle')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
		
		<div class="clear_both"></div>		
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Gl sub head</label>
           <div class="col-sm-4">
			<?= $form->field($model,'gl_sub_head')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
		<div class="clear_both"></div>		
	  <div class="bottom">
		 <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?php ActiveForm::end(); ?>
  
 