<?php
use kartik\export\ExportMenu;
use yii\grid\GridView;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bảng phân công';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assigned-table-index">

    <h1><?=Html::encode($this->title)?></h1>

    <?php $gridColumns = [
    'student.username',
    'student.email',
];
?>

    <?=ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
]);?>
    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'student.name',
        'student.email',
        'start_date',
        'end_date',
    ],
]);?>


</div>