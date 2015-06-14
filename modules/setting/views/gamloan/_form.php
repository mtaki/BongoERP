 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\GamLoan */
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
              <h3 class="content-header">Create gam-loan</h3>
            </div>
            <div class="porlets-content">
           


<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

			 <div class="form-group">
		   <label class="col-sm-2 control-label">Loan account no</label>
           <div class="col-sm-4">
			<?= $form->field($model,'loan_account_no')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Disbursement account</label>
           <div class="col-sm-4">
			<?= $form->field($model,'disbursement_account')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Settlement account</label>
           <div class="col-sm-4">
			<?= $form->field($model,'settlement_account')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Loan processing fee</label>
           <div class="col-sm-4">
			<?= $form->field($model,'loan_processing_fee')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Disbursed amount</label>
           <div class="col-sm-4">
			<?= $form->field($model,'disbursed_amount')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">No of repayments</label>
           <div class="col-sm-4">
			<?= $form->field($model,'no_of_repayments')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Periodic payment</label>
           <div class="col-sm-4">
			<?= $form->field($model,'periodic_payment')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Expected interest</label>
           <div class="col-sm-4">
			<?= $form->field($model,'expected_interest')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Payment source</label>
           <div class="col-sm-4">
			<?= $form->field($model,'payment_source')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Principal in arrear</label>
           <div class="col-sm-4">
			<?= $form->field($model,'principal_in_arrear')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Interest in arrear</label>
           <div class="col-sm-4">
			<?= $form->field($model,'interest_in_arrear')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Penalty arrear</label>
           <div class="col-sm-4">
			<?= $form->field($model,'penalty_arrear')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Interest in suspense</label>
           <div class="col-sm-4">
			<?= $form->field($model,'interest_in_suspense')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Loan calc method</label>
           <div class="col-sm-4">
			<?= $form->field($model,'loan_calc_method')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Principal paid todate</label>
           <div class="col-sm-4">
			<?= $form->field($model,'principal_paid_todate')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Principal remaining todate</label>
           <div class="col-sm-4">
			<?= $form->field($model,'principal_remaining_todate')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Total interest paid todate</label>
           <div class="col-sm-4">
			<?= $form->field($model,'total_interest_paid_todate')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Ins per repayment</label>
           <div class="col-sm-4">
			<?= $form->field($model,'ins_per_repayment')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Ins due</label>
           <div class="col-sm-4">
			<?= $form->field($model,'ins_due')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Ins paid todate</label>
           <div class="col-sm-4">
			<?= $form->field($model,'ins_paid_todate')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Ins payment method</label>
           <div class="col-sm-4">
			<?= $form->field($model,'ins_payment_method')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Ins arrears</label>
           <div class="col-sm-4">
			<?= $form->field($model,'ins_arrears')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Ins paid back</label>
           <div class="col-sm-4">
			<?= $form->field($model,'ins_paid_back')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Nth</label>
           <div class="col-sm-4">
			<?= $form->field($model,'nth')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Last repayment date</label>
           <div class="col-sm-4">
			<?= $form->field($model,'last_repayment_date')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Dpd</label>
           <div class="col-sm-4">
			<?= $form->field($model,'dpd')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Next repayment date</label>
           <div class="col-sm-4">
			<?= $form->field($model,'next_repayment_date')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Loan status</label>
           <div class="col-sm-4">
			<?= $form->field($model,'loan_status')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Npl flag</label>
           <div class="col-sm-4">
			<?= $form->field($model,'npl_flag')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Npl date</label>
           <div class="col-sm-4">
			<?= $form->field($model,'npl_date')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Final repay date</label>
           <div class="col-sm-4">
			<?= $form->field($model,'final_repay_date')->textInput(['maxlength' => true])->label('') ?>			</div>
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
