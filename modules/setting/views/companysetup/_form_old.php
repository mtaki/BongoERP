 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\CompanySetup */
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
              <h3 class="content-header">Create company-setup</h3>
            </div>
            <div class="porlets-content">
            <form  name="company-setup-form" class="form-horizontal row-border">


					<div class="form-group">
                  	<label class="col-sm-3 control-label">Parameter ID</label>
                  	<div class="col-sm-9">
					<input type="text" name="Parameter_ID" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">CompanyName</label>
                  	<div class="col-sm-9">
					<input type="text" name="CompanyName" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Company abreviation</label>
                  	<div class="col-sm-9">
					<input type="text" name="Company_abreviation" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">PostalAddress</label>
                  	<div class="col-sm-9">
					<input type="text" name="PostalAddress" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Residence</label>
                  	<div class="col-sm-9">
					<input type="text" name="Residence" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">PhoneAndFax</label>
                  	<div class="col-sm-9">
					<input type="text" name="PhoneAndFax" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">EmailAndWebsite</label>
                  	<div class="col-sm-9">
					<input type="text" name="EmailAndWebsite" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">CompanyLogo</label>
                  	<div class="col-sm-9">
					<input type="text" name="CompanyLogo" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">ReportFooter</label>
                  	<div class="col-sm-9">
					<input type="text" name="ReportFooter" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Default currency</label>
                  	<div class="col-sm-9">
					<input type="text" name="default_currency" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Current value per share</label>
                  	<div class="col-sm-9">
					<input type="text" name="current_value_per_share" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Loan computation method</label>
                  	<div class="col-sm-9">
					<input type="text" name="loan_computation_method" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Monthly rate for Basic method</label>
                  	<div class="col-sm-9">
					<input type="text" name="monthly_rate_for_Basic_method" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Chairman</label>
                  	<div class="col-sm-9">
					<input type="text" name="chairman" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Secretary</label>
                  	<div class="col-sm-9">
					<input type="text" name="secretary" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Treasurer</label>
                  	<div class="col-sm-9">
					<input type="text" name="treasurer" class="form-control"></div>
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
		   <label class="col-sm-3 control-label">Parameter ID</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Parameter_ID')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">CompanyName</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'CompanyName')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Company abreviation</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Company_abreviation')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">PostalAddress</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'PostalAddress')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Residence</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Residence')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">PhoneAndFax</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'PhoneAndFax')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">EmailAndWebsite</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'EmailAndWebsite')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">CompanyLogo</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'CompanyLogo')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">ReportFooter</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'ReportFooter')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Default currency</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'default_currency')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Current value per share</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'current_value_per_share')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Loan computation method</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'loan_computation_method')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Monthly rate for Basic method</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'monthly_rate_for_Basic_method')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Chairman</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'chairman')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Secretary</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'secretary')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Treasurer</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'treasurer')->textInput(['maxlength' => true])->label('') ?>

		
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
