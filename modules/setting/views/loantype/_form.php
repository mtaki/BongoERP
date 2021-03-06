 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\LoanType */
/* @var $form yii\widgets\ActiveForm */
?>



<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

		<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Loan type</label>
           <div class="col-sm-4">
			<?= $form->field($model,'loan_type')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
		<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Interest rate</label>
           <div class="col-sm-4">
			<?= $form->field($model,'interest_rate')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
		<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Description</label>
           <div class="col-sm-4">
			<?= $form->field($model,'description')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
				<div class="clear_both"></div>
	  <div class="bottom">
		 <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?php ActiveForm::end(); ?>
  
 