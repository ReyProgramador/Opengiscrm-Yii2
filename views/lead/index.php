<?php

use app\models\Lead;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\LeadSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Leads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lead-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lead', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_lead',
            'id_stripe',
            'first_name',
            'last_name',
            'company',
            //'email:email',
            //'img',
            //'street',
            //'id_state',
            //'city',
            //'id_country',
            //'postal_code',
            //'title',
            //'phone',
            //'cell_phone',
            //'id_source',
            //'id_sector',
            //'id_project',
            //'income',
            //'fax',
            //'website',
            //'id_state_client',
            //'quantity_worker',
            //'id_qualification',
            //'id_skype',
            //'id_twitter',
            //'description',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Lead $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_lead' => $model->id_lead]);
                 }
            ],
        ],
    ]); ?>


</div>
