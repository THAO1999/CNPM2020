<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Registrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-registration-index">

    <h1><?=Html::encode($this->title)?></h1>
    <p>
        <?=Html::a('Thêm sinh viên', ['./additional-student'], ['class' => 'btn btn-success'])?>
    </p>
    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'student.username',
        'organizationRequest.subject',
        'enterprise_name',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>


</div>
