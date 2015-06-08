 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\FixedAssetsMaster */
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
              <h3 class="content-header">Create fixed-assets-master</h3>
            </div>
            <div class="porlets-content">
            <form  name="fixed-assets-master-form" class="form-horizontal row-border">


					<div class="form-group">
                  	<label class="col-sm-3 control-label">Asset id</label>
                  	<div class="col-sm-9">
					<input type="text" name="asset_id" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Barcode no</label>
                  	<div class="col-sm-9">
					<input type="text" name="barcode_no" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Asset type</label>
                  	<div class="col-sm-9">
					<input type="text" name="asset_type" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Manufacturer</label>
                  	<div class="col-sm-9">
					<input type="text" name="manufacturer" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Accuisation price</label>
                  	<div class="col-sm-9">
					<input type="text" name="accuisation_price" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Current value dep</label>
                  	<div class="col-sm-9">
					<input type="text" name="current_value_dep" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Current value market</label>
                  	<div class="col-sm-9">
					<input type="text" name="current_value_market" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Depreciation rate</label>
                  	<div class="col-sm-9">
					<input type="text" name="depreciation_rate" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Expected life years</label>
                  	<div class="col-sm-9">
					<input type="text" name="expected_life_years" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Supplier vendor</label>
                  	<div class="col-sm-9">
					<input type="text" name="supplier_vendor" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Accusation date</label>
                  	<div class="col-sm-9">
					<input type="text" name="accusation_date" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Cost center</label>
                  	<div class="col-sm-9">
					<input type="text" name="cost_center" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Assigned to</label>
                  	<div class="col-sm-9">
					<input type="text" name="assigned_to" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Asset status</label>
                  	<div class="col-sm-9">
					<input type="text" name="asset_status" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Created by</label>
                  	<div class="col-sm-9">
					<input type="text" name="created_by" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Verified by</label>
                  	<div class="col-sm-9">
					<input type="text" name="verified_by" class="form-control"></div>
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
		   <label class="col-sm-3 control-label">Barcode no</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'barcode_no')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Asset type</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'asset_type')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Manufacturer</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'manufacturer')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Accuisation price</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'accuisation_price')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Current value dep</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'current_value_dep')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Current value market</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'current_value_market')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Depreciation rate</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'depreciation_rate')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Expected life years</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'expected_life_years')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Supplier vendor</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'supplier_vendor')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Accusation date</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'accusation_date')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Cost center</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'cost_center')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Assigned to</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'assigned_to')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Asset status</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'asset_status')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Created by</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'created_by')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Verified by</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'verified_by')->textInput(['maxlength' => true])->label('') ?>

		
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
