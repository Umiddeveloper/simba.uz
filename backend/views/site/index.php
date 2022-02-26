<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Панель управления администратора';
?><h1 class="text-center"><?= $this->title ?></h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-list"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/menu/index?slug=main']) ?>">
                        <h4>Главное меню </h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-list"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/menu/index?slug=footer']) ?>">
                        <h4>Полезные ссылки</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-image"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=slayd']) ?>">
                        <h4>Слайдер</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-vcard"></i></span>
                <div class="info-box-content">
                    <a href="/cms/items/index?id=27&slug=about-us">
                        <h4>"О нас" в главной странице</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
         <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa  fa-apple"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=partners']) ?>">
                        <h4>Партнёры</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-list-alt"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=infrastructure']) ?>">
                        <h4>Инфраструктура</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-globe"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=map']) ?>">
                        <h4>География покрытия</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-bar-chart"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=counters']) ?>">
                        <h4>Мы в цифрах</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-newspaper-o"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=news']) ?>">
                        <h4>Блог (новости)</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=team']) ?>">
                        <h4>Kоманда</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-clone"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/items/index?slug=pages']) ?>">
                        <h4>Страницы</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-edit"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['//cms/unit-categories/unit?slug=contacts']) ?>">
                        <h4>Контакты</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">     
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-telegram"></i></span>
                <div class="info-box-content">
                    <a href="<?= Url::to(['/cms/unit-categories/unit?slug=socials']) ?>">
                        <h4>Соц. сети</h4>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-envelope"></i></span>
                <div class="info-box-content">
                    <a href="/contact">
                        <h4>Оставленные сообщения</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
