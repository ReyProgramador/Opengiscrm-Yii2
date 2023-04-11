<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Lead $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Leads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lead-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_lead' => $model->id_lead], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_lead' => $model->id_lead], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_lead',
            'id_stripe',
            'first_name',
            'last_name',
            'company',
            'email:email',
            'img',
            'street',
            'id_state',
            'city',
            'id_country',
            'postal_code',
            'title',
            'phone',
            'cell_phone',
            'id_source',
            'id_sector',
            'id_project',
            'income',
            'fax',
            'website',
            'id_state_client',
            'quantity_worker',
            'id_qualification',
            'id_skype',
            'id_twitter',
            'description',
        ],
    ]) ?>

</div>
