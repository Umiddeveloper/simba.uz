<?php

use afzalroq\cms\entities\unit\Unit;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use frontend\widgets\FooterWidget;
use frontend\widgets\HeaderWidget;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Breadcrumbs;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Menu;
use frontend\widgets\LanguagesWidget;

/* @var $this View */
/* @var $content string */

AppAsset::register($this);

?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html dir="ltr" lang="ru-RU">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php $this->head() ?>

    <link href="/images/favicon.png" rel="icon">
    <title><?= "SIMBA - " . Unit::get('footer') ?></title>
</head>

<body class="documenter-project-documenter-v20">
<?php $this->beginBody() ?>

<!-- Preloader Box -->
<div class="preloader_wrapper preloader_active preloader_open">
    <div class="preloader_holder">
        <div class="preloader d-flex justify-content-center align-items-center h-100">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<!-- Search Box -->
<div class="searchBox">
    <div class="searchBoxContainer">
        <div class="search_bar_inner">

            <form class="search__popup-form" action="/site/search">
                <input type="text" class="search__input" id="search-input" name="text" autofocus="autofocus">
                <button class="module__search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</div>

<?php $menuItems = Menu::getMenu('main'); ?>

<!-- Document Wrapper
============================================= -->
<div class="main_wrapper">

    <?= HeaderWidget::widget() ?>
    <?= $content ?>

</div>

<?= FooterWidget::widget() ?>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
