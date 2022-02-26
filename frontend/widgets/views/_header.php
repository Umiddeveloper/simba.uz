<?php

use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Menu;
use frontend\widgets\LanguagesWidget;
$menuItems = Menu::getMenu('main');

?>

<header class="main-header">
    <div class="container">
        <div class="gol_header_wrapper">
            <div class="row align-items-center">

                <div class="col-lg-3 col-md-4 col-sm-6 col-6 text-right">
                <a href="/"> <img id="simbalogo" class="simbalogo" src="/images/simbalogo.png" alt=""> </a>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-6 col-6">
                    <div class="gol_main_menu main_menu_parent">

                        <div class="gol_nav_items main_menu_wrapper text-right">
                            <ul>
                                <?php foreach ($menuItems as $one_menu):?>
                                <li class="">
                                    <a href="<?=$one_menu['link']?>"><?=$one_menu['content']?></a>
                                </li>
                                <?php endforeach;?>
                                <li class="has_submenu" id="language_in_menu">
                                    <a href="#"><?= Yii::$app->params['cms']['languages'][Yii::$app->params['cms']['languageIds'][Yii::$app->language]] ?></a>
                                    <ul class="sub_menu">
                                        <?= LanguagesWidget::widget(); ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="gol_search_wrap menu_btn_wrap" style="position: relative">
                            <ul class="display_flex">

                                <li>
                                    <a class="searchBtn" onclick="setTimeout(() => { document.getElementById('search-input').focus(); }, 500);">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>

                                <ul class="languages_two">
                                    <li class="has_submenu_inner">
                                        <a href="#"><?= Yii::$app->params['cms']['languages'][Yii::$app->params['cms']['languageIds'][Yii::$app->language]] ?></a>
                                        <ul class="sub_menu_inner">
                                            <?= LanguagesWidget::widget(); ?>
                                        </ul>
                                    </li>
                                </ul>

                                <li>
                                    <a class="menu_btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class="gol_header_info">
                    <div class="gol_logo">
                        <a href="/"><img src="/images/simbalogo.png" alt="logo" /></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
