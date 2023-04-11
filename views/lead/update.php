<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Lead $model */

$this->title = 'Update Lead: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Leads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id_lead' => $model->id_lead]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lead-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
