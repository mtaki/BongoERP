 <?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */

/*+++++++++++++++++++ 
Designed by: dominic Lawrence Mtaki
Email::chottomtaki@gmail.com
skype id:m_mtaki
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
              <h3 class="content-header">Create <?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?></h3>
            </div>
            <div class="porlets-content">
           


<?= "<?php " ?>$form = ActiveForm::begin(["class"=>"form-horizontal row-border"]); ?>

	<?php foreach ($generator->getColumnNames() as $attribute):
		if (in_array($attribute, $safeAttributes)):?>
		 <div class="form-group">
		   <label class="col-sm-2 control-label"><?php echo ucfirst(str_replace("_"," ",$attribute)) ;?></label>
           <div class="col-sm-4">
			<?php echo "<?= "."$"."form->field($"."model,'" .$attribute . "')->textInput(['maxlength' => true])->label('') ?>";?>
			</div>
		</div><!--/form-group-->
		<?php endif;?>
		
	<?php endforeach;?>
			
	  <div class="bottom">
		 <?= "<?= " ?>Html::submitButton($model->isNewRecord ? <?= $generator->generateString('Create') ?> : <?= $generator->generateString('Update') ?>, ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
          <button type="button" class="btn btn-default">Cancel</button>
      </div>
   

 <?= "<?php " ?>ActiveForm::end(); ?>
  
 
            </div><!--/porlets-content-->
          </div><!--/block-web--> 
        </div><!--/col-md-6-->
        

</div>
      </div>
      
  
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
