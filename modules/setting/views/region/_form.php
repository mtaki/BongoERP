 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\Region */
/* @var $form yii\widgets\ActiveForm */
?>



<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

			
	<div class="form-group">
		   <label class="col-sm-2 control-label">Region Name</label>
           <div class="col-sm-4">
			<?= $form->field($model,'Region_Name')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
			 <div class="form-group">
		   <label class="col-sm-2 control-label">Zone id</label>
           <div class="col-sm-4">
			<?= $form->field($model,'zone_id')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				
				
	  <div class="bottom">
		 <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?php ActiveForm::end(); ?>
  
 