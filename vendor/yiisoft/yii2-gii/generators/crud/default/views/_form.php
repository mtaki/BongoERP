 <?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */

/*+++++++++++++++++++ 
Designed by: dominic Lawrence Mtaki
Email::chottomtaki@gmail.com
skype id:m_mtaki
Phone:+255-713123897
******************************/
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>



<?= "<?php " ?>$form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

	<?php foreach ($generator->getColumnNames() as $attribute):
		if (in_array($attribute, $safeAttributes)):?>
	  <div class="form-group">
		   <label class="col-sm-2 control-label"><?php echo ucfirst(str_replace("_"," ",$attribute)) ;?></label>
           <div class="col-sm-4">
			<?php echo "<?= "."$"."form->field($"."model,'" .$attribute . "')->textInput(['maxlength' => true])->label('') ?>\n";?>
			</div>
		</div><!--/form-group-->
		<?php endif;?>
		<div class="clear_both"></div>
	<?php endforeach;?>
			<div class="clear_both"></div>
	  <div class="bottom">
		 <?= "<?= " ?>Html::submitButton($model->isNewRecord ? <?= $generator->generateString('Create') ?> : <?= $generator->generateString('Update') ?>, ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?= "<?php " ?>ActiveForm::end(); ?>
  
 