 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\Gam */
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
              <h3 class="content-header">Create gam</h3>
            </div>
            <div class="porlets-content">
            <form  name="gam-form" class="form-horizontal row-border">


					<div class="form-group">
                  	<label class="col-sm-3 control-label">Account no</label>
                  	<div class="col-sm-9">
					<input type="text" name="account_no" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Product code</label>
                  	<div class="col-sm-9">
					<input type="text" name="product_code" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Customer no</label>
                  	<div class="col-sm-9">
					<input type="text" name="customer_no" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Account name</label>
                  	<div class="col-sm-9">
					<input type="text" name="account_name" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Branch id</label>
                  	<div class="col-sm-9">
					<input type="text" name="branch_id" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Date opened</label>
                  	<div class="col-sm-9">
					<input type="text" name="date_opened" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Balance is DR CR</label>
                  	<div class="col-sm-9">
					<input type="text" name="balance_is_DR_CR" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Cleared balance</label>
                  	<div class="col-sm-9">
					<input type="text" name="cleared_balance" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">DR int rate</label>
                  	<div class="col-sm-9">
					<input type="text" name="DR_int_rate" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">CR int rate</label>
                  	<div class="col-sm-9">
					<input type="text" name="CR_int_rate" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Currency code</label>
                  	<div class="col-sm-9">
					<input type="text" name="currency_code" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Accr dr amount</label>
                  	<div class="col-sm-9">
					<input type="text" name="accr_dr_amount" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Accr cr amount</label>
                  	<div class="col-sm-9">
					<input type="text" name="accr_cr_amount" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Applied dr int todate</label>
                  	<div class="col-sm-9">
					<input type="text" name="applied_dr_int_todate" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Applied cr int todate</label>
                  	<div class="col-sm-9">
					<input type="text" name="applied_cr_int_todate" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Freez status</label>
                  	<div class="col-sm-9">
					<input type="text" name="freez_status" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Freez date</label>
                  	<div class="col-sm-9">
					<input type="text" name="freez_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Account close flag</label>
                  	<div class="col-sm-9">
					<input type="text" name="account_close_flag" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Account close date</label>
                  	<div class="col-sm-9">
					<input type="text" name="account_close_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Last tran date</label>
                  	<div class="col-sm-9">
					<input type="text" name="last_tran_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Total dr trans</label>
                  	<div class="col-sm-9">
					<input type="text" name="total_dr_trans" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Total cr trans</label>
                  	<div class="col-sm-9">
					<input type="text" name="total_cr_trans" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Source of funds</label>
                  	<div class="col-sm-9">
					<input type="text" name="source_of_funds" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Wtax flag</label>
                  	<div class="col-sm-9">
					<input type="text" name="wtax_flag" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Wtax percent</label>
                  	<div class="col-sm-9">
					<input type="text" name="wtax_percent" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Wtax amount</label>
                  	<div class="col-sm-9">
					<input type="text" name="wtax_amount" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Source account</label>
                  	<div class="col-sm-9">
					<input type="text" name="source_account" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">IBAN</label>
                  	<div class="col-sm-9">
					<input type="text" name="IBAN" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Freez reason</label>
                  	<div class="col-sm-9">
					<input type="text" name="freez_reason" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Portifolio</label>
                  	<div class="col-sm-9">
					<input type="text" name="portifolio" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Documents attached</label>
                  	<div class="col-sm-9">
					<input type="text" name="documents_attached" class="form-control"></div>
                	</div><!--/form-group-->
			


  



		 

          
                <div class="bottom">
                  <button type="submit" class="btn btn-primary">Create</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </div><!--/form-group-->
              </form>
            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
        
       
        
 <?php $form = ActiveForm::begin(); ?>

		<div class="form-group">
		   <label class="col-sm-3 control-label">Account no</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'account_no')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Product code</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'product_code')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Customer no</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'customer_no')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Account name</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'account_name')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Branch id</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'branch_id')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Date opened</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'date_opened')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Balance is DR CR</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'balance_is_DR_CR')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Cleared balance</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'cleared_balance')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">DR int rate</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'DR_int_rate')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">CR int rate</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'CR_int_rate')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Currency code</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'currency_code')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Accr dr amount</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'accr_dr_amount')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Accr cr amount</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'accr_cr_amount')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Applied dr int todate</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'applied_dr_int_todate')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Applied cr int todate</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'applied_cr_int_todate')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Freez status</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'freez_status')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Freez date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'freez_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Account close flag</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'account_close_flag')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Account close date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'account_close_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Last tran date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'last_tran_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Total dr trans</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'total_dr_trans')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Total cr trans</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'total_cr_trans')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Source of funds</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'source_of_funds')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Wtax flag</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'wtax_flag')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Wtax percent</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'wtax_percent')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Wtax amount</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'wtax_amount')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Source account</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'source_account')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">IBAN</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'IBAN')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Freez reason</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'freez_reason')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Portifolio</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'portifolio')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Documents attached</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'documents_attached')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
									

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
      </div>
      
  
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
