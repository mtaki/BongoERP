<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\setting\models\GlFixedAssetsTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Gl Fixed Assets Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gl-fixed-assets-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Gl Fixed Assets Type'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sub_ledger_no',
            'name',
            'remarks',
            'mapped_gl_account',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
