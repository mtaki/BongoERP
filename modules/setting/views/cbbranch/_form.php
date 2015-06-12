 <?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\modules\setting\models\AdminZone;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\CbBranch */
/* @var $form yii\widgets\ActiveForm */
?>



<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

		<div class="form-group">
		   <label class="col-sm-2 control-label">Branch no</label>
           <div class="col-sm-2">
			<?= $form->field($model,'branch_no')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>	
		<div class="form-group">
		   <label class="col-sm-2 control-label">Branch name</label>
           <div class="col-sm-4">
			<?= $form->field($model,'branch_name')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
		<div class="clear_both"></div>	
	
	<div class="form-group">
		   <label class="col-sm-2 control-label">Branch description</label>
           <div class="col-sm-4">
			<?= $form->field($model,'branch_description')->textInput(['maxlength' => true])->label('') ?>			</div>
		</div><!--/form-group-->
			<div class="clear_both"></div>
			
		<div class="form-group">
		   <label class="col-sm-2 control-label">Branch zone</label>
           <div class="col-sm-4">
			<?= $form->field($model,'branch_zone')->dropdownList(ArrayHelper::map(AdminZone::find()->all(),'zone_id','zone_name'))->label('') ?>			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
	  <div class="bottom">
		 <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?php ActiveForm::end(); ?>
  
 