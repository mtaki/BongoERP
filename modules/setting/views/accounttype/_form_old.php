 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountType */
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
              <h3 class="content-header">Create account-type</h3>
            </div>
            <div class="porlets-content">
            <form  name="account-type-form" class="form-horizontal row-border">


					<div class="form-group">
                  	<label class="col-sm-3 control-label">Account type code</label>
                  	<div class="col-sm-9">
					<input type="text" name="account_type_code" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Account name</label>
                  	<div class="col-sm-9">
					<input type="text" name="account_name" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Account description</label>
                  	<div class="col-sm-9">
					<input type="text" name="account_description" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Is DR or CR</label>
                  	<div class="col-sm-9">
					<input type="text" name="Is_DR_or_CR" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Default DR rate</label>
                  	<div class="col-sm-9">
					<input type="text" name="default_DR_rate" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Default CR rate</label>
                  	<div class="col-sm-9">
					<input type="text" name="default_CR_rate" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Is for office or customer</label>
                  	<div class="col-sm-9">
					<input type="text" name="Is_for_office_or_customer" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Is customer balance</label>
                  	<div class="col-sm-9">
					<input type="text" name="Is_customer_balance" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Interest applic cycle</label>
                  	<div class="col-sm-9">
					<input type="text" name="interest_applic_cycle" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Gl sub head</label>
                  	<div class="col-sm-9">
					<input type="text" name="gl_sub_head" class="form-control"></div>
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
		   <label class="col-sm-3 control-label">Account type code</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'account_type_code')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Account name</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'account_name')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Account description</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'account_description')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Is DR or CR</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Is_DR_or_CR')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Default DR rate</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'default_DR_rate')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Default CR rate</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'default_CR_rate')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Is for office or customer</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Is_for_office_or_customer')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Is customer balance</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Is_customer_balance')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Interest applic cycle</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'interest_applic_cycle')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Gl sub head</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'gl_sub_head')->textInput(['maxlength' => true])->label('') ?>

		
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
