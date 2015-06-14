 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\SystemDailyInterface */
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
              <h3 class="content-header">Create system-daily-interface</h3>
            </div>
            <div class="porlets-content">
            <form  name="system-daily-interface-form" class="form-horizontal row-border">


					<div class="form-group">
                  	<label class="col-sm-3 control-label">Id</label>
                  	<div class="col-sm-9">
					<input type="text" name="id" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Doc trans date</label>
                  	<div class="col-sm-9">
					<input type="text" name="Doc_trans_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Doc post date</label>
                  	<div class="col-sm-9">
					<input type="text" name="Doc_post_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Doc period month</label>
                  	<div class="col-sm-9">
					<input type="text" name="Doc_period_month" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Doc period year</label>
                  	<div class="col-sm-9">
					<input type="text" name="Doc_period_year" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Doc Type</label>
                  	<div class="col-sm-9">
					<input type="text" name="Doc_Type" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Trans type</label>
                  	<div class="col-sm-9">
					<input type="text" name="trans_type" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Doc currency</label>
                  	<div class="col-sm-9">
					<input type="text" name="Doc_currency" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Tran amount</label>
                  	<div class="col-sm-9">
					<input type="text" name="Tran_amount" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Tran amount lcy</label>
                  	<div class="col-sm-9">
					<input type="text" name="Tran_amount_lcy" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">DR CR indicator</label>
                  	<div class="col-sm-9">
					<input type="text" name="DR_CR_indicator" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Gl account</label>
                  	<div class="col-sm-9">
					<input type="text" name="gl_account" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Trans Narative</label>
                  	<div class="col-sm-9">
					<input type="text" name="Trans_Narative" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Company code</label>
                  	<div class="col-sm-9">
					<input type="text" name="Company_code" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Cost center</label>
                  	<div class="col-sm-9">
					<input type="text" name="Cost_center" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Transaction status</label>
                  	<div class="col-sm-9">
					<input type="text" name="Transaction_status" class="form-control"></div>
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
		   <label class="col-sm-3 control-label">Doc trans date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Doc_trans_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Doc post date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Doc_post_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Doc period month</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Doc_period_month')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Doc period year</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Doc_period_year')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Doc Type</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Doc_Type')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Trans type</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'trans_type')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Doc currency</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Doc_currency')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Tran amount</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Tran_amount')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Tran amount lcy</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Tran_amount_lcy')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">DR CR indicator</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'DR_CR_indicator')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Gl account</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'gl_account')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Trans Narative</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Trans_Narative')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Company code</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Company_code')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Cost center</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Cost_center')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Transaction status</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Transaction_status')->textInput(['maxlength' => true])->label('') ?>

		
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
