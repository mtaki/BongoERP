 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\Models\CostCenter */
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
              <h3 class="content-header">Create cost-center</h3>
            </div>
            <div class="porlets-content">
            <form  name="cost-center-form" class="form-horizontal row-border">


					<div class="form-group">
                  	<label class="col-sm-3 control-label">Cost center id</label>
                  	<div class="col-sm-9">
					<input type="text" name="Cost_center_id" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Cost center name</label>
                  	<div class="col-sm-9">
					<input type="text" name="Cost_center_name" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Cost center description</label>
                  	<div class="col-sm-9">
					<input type="text" name="Cost_center_description" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Date started</label>
                  	<div class="col-sm-9">
					<input type="text" name="date_started" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Status</label>
                  	<div class="col-sm-9">
					<input type="text" name="Status" class="form-control"></div>
                	</div><!--/form-group-->
			

			<div class="form-group">
                  	<label class="col-sm-3 control-label">Date closed</label>
                  	<div class="col-sm-9">
					<input type="text" name="Date_closed" class="form-control"></div>
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
		   <label class="col-sm-3 control-label">Cost center id</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Cost_center_id')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Cost center name</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Cost_center_name')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Cost center description</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Cost_center_description')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Date started</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'date_started')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Status</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Status')->textInput(['maxlength' => true])->label('') ?>

		
				</div>
		</div><!--/form-group-->
								<div class="form-group">
		   <label class="col-sm-3 control-label">Date closed</label>
           <div class="col-sm-9">
		
				<?= $form->field($model,'Date_closed')->textInput(['maxlength' => true])->label('') ?>

		
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
