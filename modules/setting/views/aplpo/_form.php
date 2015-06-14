 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\setting\models\ApLpo */
/* @var $form yii\widgets\ActiveForm */
?>



<?php $form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

			<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Lpo number</label>
           <div class="col-sm-4">
			<?= $form->field($model,'lpo_number')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Vendor master id</label>
           <div class="col-sm-4">
			<?= $form->field($model,'vendor_master_id')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Lpo date</label>
           <div class="col-sm-4">
			<?= $form->field($model,'lpo_date')->textInput(['maxlength' => true])->label('') ?>
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
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Created by</label>
           <div class="col-sm-4">
			<?= $form->field($model,'created_by')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Created date</label>
           <div class="col-sm-4">
			<?= $form->field($model,'created_date')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Released by</label>
           <div class="col-sm-4">
			<?= $form->field($model,'released_by')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Released date</label>
           <div class="col-sm-4">
			<?= $form->field($model,'released_date')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Goods received</label>
           <div class="col-sm-4">
			<?= $form->field($model,'goods_received')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Receipt date</label>
           <div class="col-sm-4">
			<?= $form->field($model,'receipt_date')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Received by</label>
           <div class="col-sm-4">
			<?= $form->field($model,'received_by')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Lpo match invoice</label>
           <div class="col-sm-4">
			<?= $form->field($model,'lpo_match_invoice')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Payment done</label>
           <div class="col-sm-4">
			<?= $form->field($model,'payment_done')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Payment date</label>
           <div class="col-sm-4">
			<?= $form->field($model,'payment_date')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
		  <div class="form-group">
		   <label class="col-sm-2 control-label">Total amount</label>
           <div class="col-sm-4">
			<?= $form->field($model,'Total_amount')->textInput(['maxlength' => true])->label('') ?>
			</div>
		</div><!--/form-group-->
				<div class="clear_both"></div>
				<div class="clear_both"></div>
	  <div class="bottom">
		 <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?php ActiveForm::end(); ?>
  
 