 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\AccountCoaGrandParent */
/* @var $form yii\widgets\ActiveForm */
?>



<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

			<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Account grand parent code</label>
           <div class="col-sm-4">
			<?= $form->field($model,'account_grand_parent_code')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Coa grand parent sub cat id</label>
           <div class="col-sm-4">
			<?= $form->field($model,'coa_grand_parent_sub_cat_id')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Grand parent name</label>
           <div class="col-sm-4">
			<?= $form->field($model,'grand_parent_name')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Remarks</label>
           <div class="col-sm-4">
			<?= $form->field($model,'Remarks')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
				<div class="clear_both"></div>
	  <div class="bottom">
		 <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?php ActiveForm::end(); ?>
  
 