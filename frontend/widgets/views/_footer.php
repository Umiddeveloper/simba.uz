<?php
/* @var $news afzalroq\cms\entities\front\Items[] */

use afzalroq\cms\entities\unit\Unit;
use afzalroq\cms\entities\front\Menu;
$menuItems = Menu::getMenu('footer');
?>

<footer>
    <div class="gol_footer_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb_30">
                    <div class="gol_widgets gol_footer_about">
                        <img style="width: 230px" class="footer_logo" src="/images/textsimba.png" alt="" />
                        <p><?=Unit::get('footer')?></p>
                        <div class="gol_address_wrap">
                            <h4><?=Yii::t('app', 'Address')?></h4>
                            <p><?= Unit::get('address') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb_30">
                    <div class="gol_widgets gol_footer_twitter">
                        <h4 class="gol_footer_heading relative"><?=Yii::t('app','Social Network')?></h4>
                        <ul>
                            <ul>

                                <?php if (Unit::get('telegram')): ?>
                                <li>
                                    <span class="fa fa-telegram"></span>
                                    <a href="<?=Unit::get('telegram'); ?>" target="_blank">Telegram</a>
                                </li>
                                <?php endif; ?>

                                <?php if (Unit::get('instagram')): ?>
                                <li>
                                    <span class="fa fa-instagram"></span>
                                    <a href="<?= Unit::get('instagram') ?>" target="_blank">Instagram</a>
                                </li>
                                <?php endif; ?>

                                <?php if (Unit::get('facebook')): ?>
                                <li>
                                    <span class="fa fa-facebook"></span>
                                    <a href="<?= Unit::get('facebook') ?>" target="_blank">Facebook</a>
                                </li>
                                <?php endif; ?>
                            </ul>


                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb_30">
                    <div class="gol_widgets gol_footer_menu">
                        <h4 class="gol_footer_heading relative"><?=Yii::t('app','Menu')?></h4>
                        <ul>
                            <?php foreach ($menuItems as $one_menu):?>

                            <li class="">
                                <a href="<?=$one_menu['link']?>"><?=$one_menu['content']?></a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb_30">
                    <div class="gol_widgets gol_footer_post">
                        <h4 class="gol_footer_heading relative"><?=Yii::t('app','Latest News')?></h4>
                        <ul>
                            <?php foreach ($news as $one_news):?>
                            <li>
                                <img src="<?=$one_news->getPhoto1('80', '80', 'cropResize', 'white', 'center', 'center')?>"
                                    alt="" />
                                <a href="<?=$one_news['link']?>">
                                    <p class="gol_post_title"><?=$one_news->getText1()?></p>
                                    <p class="gol_post_date"><?= date('d-m-Y',$one_news->getDate());  ?></p>
                                </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <img style="width: 100%" src="/images/savanna.png" alt="">
        </div>
    </div>

    <div class="gol_copyright_wrapper white">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <div class="footer__copyright">
                <style>
                    .footer-lnk {
                        color: #fff;
                    }
                    .footer-lnk:hover {
                        color: #00CFE9;
                    }
                </style>
                <p class="fz-13 mb-0">&copy; <?= (date("Y") == 2021) ? 2021 : "2021-" . date("Y") ?> SIMBA |
                    <?= Yii::t('app', 'Developed by <a href="{url}" class="white" target="_blank">PROACTIVE MEDIA</a>', ['url' => "https://proactive.uz"])?>
                </p>
            </div>
        </div>
    </div>
</footer>

<a href="javascript:void(0);" id="scroll"><span class="fa fa-angle-double-up"></span></a>
