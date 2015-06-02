 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\ApLpo */
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
              <h3 class="content-header">Create ap-lpo</h3>
            </div>
            <div class="porlets-content">
            <form  name="ap-lpo-form" class="form-horizontal row-border">


					<div class="form-group">
                  	<label class="col-sm-3 control-label">Id</label>
                  	<div class="col-sm-9">
					<input type="text" name="id" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Lpo number</label>
                  	<div class="col-sm-9">
					<input type="text" name="lpo_number" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Vendor master id</label>
                  	<div class="col-sm-9">
					<input type="text" name="vendor_master_id" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Lpo date</label>
                  	<div class="col-sm-9">
					<input type="text" name="lpo_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Purchase type</label>
                  	<div class="col-sm-9">
					<input type="text" name="purchase_type" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Created by</label>
                  	<div class="col-sm-9">
					<input type="text" name="created_by" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Created date</label>
                  	<div class="col-sm-9">
					<input type="text" name="created_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Released by</label>
                  	<div class="col-sm-9">
					<input type="text" name="released_by" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Released date</label>
                  	<div class="col-sm-9">
					<input type="text" name="released_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Goods received</label>
                  	<div class="col-sm-9">
					<input type="text" name="goods_received" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Receipt date</label>
                  	<div class="col-sm-9">
					<input type="text" name="receipt_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Received by</label>
                  	<div class="col-sm-9">
					<input type="text" name="received_by" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Lpo match invoice</label>
                  	<div class="col-sm-9">
					<input type="text" name="lpo_match_invoice" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Payment done</label>
                  	<div class="col-sm-9">
					<input type="text" name="payment_done" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Payment date</label>
                  	<div class="col-sm-9">
					<input type="text" name="payment_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Total amount</label>
                  	<div class="col-sm-9">
					<input type="text" name="Total_amount" class="form-control"></div>
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
		   <label class="col-sm-3 control-label">Lpo number</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'lpo_number')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Vendor master id</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'vendor_master_id')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Lpo date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'lpo_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Purchase type</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'purchase_type')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Created by</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'created_by')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Created date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'created_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Released by</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'released_by')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Released date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'released_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Goods received</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'goods_received')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Receipt date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'receipt_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Received by</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'received_by')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Lpo match invoice</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'lpo_match_invoice')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Payment done</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'payment_done')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Payment date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'payment_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Total amount</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Total_amount')->textInput(['maxlength' => true])->label('') ?>

		
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
