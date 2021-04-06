<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\teachers */

$this->title = 'Thêm mới giáo viên';
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-create">

    <h1><?=Html::encode($this->title)?></h1>

    <?=$this->render('_form', [
    'model' => $model,
])?>

</div>
