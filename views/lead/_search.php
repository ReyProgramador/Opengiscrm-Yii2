<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\LeadSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="lead-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_lead') ?>

    <?= $form->field($model, 'id_stripe') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'company') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'id_state') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'id_country') ?>

    <?php // echo $form->field($model, 'postal_code') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'cell_phone') ?>

    <?php // echo $form->field($model, 'id_source') ?>

    <?php // echo $form->field($model, 'id_sector') ?>

    <?php // echo $form->field($model, 'id_project') ?>

    <?php // echo $form->field($model, 'income') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'id_state_client') ?>

    <?php // echo $form->field($model, 'quantity_worker') ?>

    <?php // echo $form->field($model, 'id_qualification') ?>

    <?php // echo $form->field($model, 'id_skype') ?>

    <?php // echo $form->field($model, 'id_twitter') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
