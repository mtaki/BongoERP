 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\DbCrTrans */
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
              <h3 class="content-header">Create db-cr-trans</h3>
            </div>
            <div class="porlets-content">
            <form  name="db-cr-trans-form" class="form-horizontal row-border">


					<div class="form-group">
                  	<label class="col-sm-3 control-label">Tran id</label>
                  	<div class="col-sm-9">
					<input type="text" name="Tran_id" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Tran date</label>
                  	<div class="col-sm-9">
					<input type="text" name="tran_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Vendor customer no</label>
                  	<div class="col-sm-9">
					<input type="text" name="vendor_customer_no" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Park date</label>
                  	<div class="col-sm-9">
					<input type="text" name="park_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Post date</label>
                  	<div class="col-sm-9">
					<input type="text" name="post_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Parked by</label>
                  	<div class="col-sm-9">
					<input type="text" name="parked_by" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Posted by</label>
                  	<div class="col-sm-9">
					<input type="text" name="posted_by" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Trans status</label>
                  	<div class="col-sm-9">
					<input type="text" name="trans_status" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Tran refference</label>
                  	<div class="col-sm-9">
					<input type="text" name="tran_refference" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Trans amount</label>
                  	<div class="col-sm-9">
					<input type="text" name="trans_amount" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Trans currency</label>
                  	<div class="col-sm-9">
					<input type="text" name="trans_currency" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Cr dr indicator</label>
                  	<div class="col-sm-9">
					<input type="text" name="cr_dr_indicator" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Gl account</label>
                  	<div class="col-sm-9">
					<input type="text" name="gl_account" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Inv number</label>
                  	<div class="col-sm-9">
					<input type="text" name="inv_number" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Payment method</label>
                  	<div class="col-sm-9">
					<input type="text" name="payment_method" class="form-control"></div>
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
		   <label class="col-sm-3 control-label">Tran id</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Tran_id')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Tran date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'tran_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Vendor customer no</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'vendor_customer_no')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Park date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'park_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Post date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'post_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Parked by</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'parked_by')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Posted by</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'posted_by')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Trans status</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'trans_status')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Tran refference</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'tran_refference')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Trans amount</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'trans_amount')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Trans currency</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'trans_currency')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Cr dr indicator</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'cr_dr_indicator')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Gl account</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'gl_account')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Inv number</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'inv_number')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Payment method</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'payment_method')->textInput(['maxlength' => true])->label('') ?>

		
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
