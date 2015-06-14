 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\FixedAssetsType */
/* @var $form yii\widgets\ActiveForm */
?>



<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

		  <div class="form-group">
		   <label class="col-sm-2 control-label">Sub ledger no</label>
           <div class="col-sm-4">
			<?= $form->field($model,'sub_ledger_no')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Name</label>
           <div class="col-sm-4">
			<?= $form->field($model,'name')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Remarks</label>
           <div class="col-sm-4">
			<?= $form->field($model,'remarks')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Mapped gl account</label>
           <div class="col-sm-4">
			<?= $form->field($model,'mapped_gl_account')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
				<div class="clear_both"></div>
	  <div class="bottom">
		 <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?php ActiveForm::end(); ?>
  
 