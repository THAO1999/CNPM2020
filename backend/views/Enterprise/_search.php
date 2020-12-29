<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EnterpriseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enterprise-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

   

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'date_establish') ?>

    <?php // echo $form->field($model, 'employee_count') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'cover_img') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'gross_revenue') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
