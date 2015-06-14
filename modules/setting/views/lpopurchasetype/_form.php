 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\LpoPurchaseType */
/* @var $form yii\widgets\ActiveForm */
?>



<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

		  <div class="form-group">
		   <label class="col-sm-2 control-label">Id</label>
           <div class="col-sm-4">
			<?= $form->field($model,'id')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Purchase type</label>
           <div class="col-sm-4">
			<?= $form->field($model,'purchase_type')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
				<div class="clear_both"></div>
	  <div class="bottom">
		 <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?php ActiveForm::end(); ?>
  
 