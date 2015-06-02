 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\LpoDetail */
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
              <h3 class="content-header">Create lpo-detail</h3>
            </div>
            <div class="porlets-content">
            <form  name="lpo-detail-form" class="form-horizontal row-border">


					<div class="form-group">
                  	<label class="col-sm-3 control-label">Id</label>
                  	<div class="col-sm-9">
					<input type="text" name="id" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Lpo id</label>
                  	<div class="col-sm-9">
					<input type="text" name="lpo_id" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Purchase type list id</label>
                  	<div class="col-sm-9">
					<input type="text" name="purchase_type_list_id" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Cost center</label>
                  	<div class="col-sm-9">
					<input type="text" name="cost_center" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Quantity</label>
                  	<div class="col-sm-9">
					<input type="text" name="quantity" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Manufacturer</label>
                  	<div class="col-sm-9">
					<input type="text" name="manufacturer" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Released</label>
                  	<div class="col-sm-9">
					<input type="text" name="released" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Correct category</label>
                  	<div class="col-sm-9">
					<input type="text" name="correct_category" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Like invoice</label>
                  	<div class="col-sm-9">
					<input type="text" name="like_invoice" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Received</label>
                  	<div class="col-sm-9">
					<input type="text" name="received" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Payed</label>
                  	<div class="col-sm-9">
					<input type="text" name="payed" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Update gl</label>
                  	<div class="col-sm-9">
					<input type="text" name="update_gl" class="form-control"></div>
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
		   <label class="col-sm-3 control-label">Lpo id</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'lpo_id')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Purchase type list id</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'purchase_type_list_id')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Cost center</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'cost_center')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Quantity</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'quantity')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Manufacturer</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'manufacturer')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Released</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'released')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Correct category</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'correct_category')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Like invoice</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'like_invoice')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Received</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'received')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Payed</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'payed')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Update gl</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'update_gl')->textInput(['maxlength' => true])->label('') ?>

		
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
