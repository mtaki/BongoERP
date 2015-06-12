<?php
/*+++++++++++++++++++ 
Designed by: dominic Lawrence Mtaki
Email::chottomtaki@gmail.com
skype id:m_mtaki
Phone:+255-713123897
******************************/
use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>

use yii\helpers\Html;
?>

<div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Setting</h1>
          <h2 class=""><?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?></h2>
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
              <div class="actions"> 
				<a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a>
				<a class="close-down" href="#"><i class="fa fa-times"></i></a> 
			   </div>
              <h3 class="content-header">Create </h3>
            </div>
            <div class="porlets-content">
	<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">

		<h1><?= "<?= " ?>Html::encode($this->title) ?></h1>
		<p><?= "<?= " ?>Html::a(<?= $generator->generateString('Create ' . Inflector::camel2words(StringHelper::basename($generator->modelClass))) ?>, ['create'], ['class' => 'btn btn-success']) ?></p>
		<?= "<?= " ?>$this->render('_form', [ 'model' => $model,]) ?>
	</div><!--/col-md-6-->
	</div>
   </div>
      <!--\\\\\\\ container  end \\\\\\-->
 </div>
    <!--\\\\\\\ content panel end \\\\\\-->

	
	