<?php
use backend\assets\AppAsset;
use backend\models\Enterprises;
AppAsset::register($this);
$this->registerCssFile("@web/css/styleOR.css");
use yii\helpers\Url;
?>

<div class="row">
    <!-- Last updated: "2020-10-05 15:09:37 +0700"-->

    <?php foreach ($listOrganizationRequest as $value): ?>
    <div class="col-md-4 col-xs-12">
    <!-- Last updated: "2020-10-05 14:41:51 +0700"-->

    <a class="top-company"href="<?=Url::home() . "detail-request-enterprise?id=" . $value->id?>  " data-controller="utm-tracking" rel="nofollow" data-method="put" href="#">
      <div class="top-company__logo text-center">
      <img alt="Toshiba Software Development (Viet Nam) Co, Ltd Vietnam Small Logo" class=" ls-is-cached lazyloaded" data-src="" src="<?=Enterprises::getImageEnterprise($value->id)?>">
    </div>

    <div class="top-company__name text-center"><?=$value->subject?> </div>

    <footer class="top-company__footer text-center">
    <span class="top-company__footer-jobs">
    <span class="red link">
        <?=$value->amount?> Slots
    </span>
    <span>&nbsp;-&nbsp;</span>
    </span>
    <span class="top-company__footer-city">Ha Noi</span>
    </footer>
    </a></div>
    <?php endforeach;?>

    </div>