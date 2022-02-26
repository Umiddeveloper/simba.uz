<?php

use frontend\widgets\ContactMapWidget;

/* @var $news afzalroq\cms\entities\front\Items[] */
/* @var $slides afzalroq\cms\entities\front\Items[] */
/* @var $infrastructures afzalroq\cms\entities\front\Items[] */
/* @var $stafes afzalroq\cms\entities\front\Items[] */
/* @var $about afzalroq\cms\entities\front\Items[] */
/* @var $partners afzalroq\cms\entities\front\Items[] */
/* @var $counters afzalroq\cms\entities\front\Items[] */
/* @var $regions afzalroq\cms\entities\front\Items[] */
/* @var $contactForm */

?>

<!-- Slider Section Start -->
<section class="gol_banner_wrapper relative">
    <div class="swiper-container gol_banner_slider">
        <div class="swiper-wrapper">
            <?php foreach ($slides as $slide): ?>
                <div class="swiper-slide">
                    <div class="gol_banner_section"
                         style="background-image: url(<?= $slide->getPhoto1('1920', '950', 'zoomCrop', 'red', 'center', 'center') ?>);">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="gol_banner_text wow fadeInUp" data-wow-delay="0.1s">
                                        <h2><?= $slide->getText1(); ?></h2>
                                        <div class="display_flex justify-content-center">
                                            <?php if ($slide->getText2() && $slide->getText3()): ?>
                                                <a href="<?= $slide['link'] ?>" class="gol_btn"></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Slider Arrows -->
    <div class="gol_banner_button">
        <div class="ButtonNext"><span>&#62;</span></div>
        <div class="ButtonPrev"><span>&#60;</span></div>
    </div>
</section>

<!-- About Section Start -->
<section class="gol_about_section" style="padding:100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb_30">
                <div class="gol_about_detail">
                    <h2><?= $about->text1 ?></h2>
                    <p><?= $about->text2 ?></p>
                    <a href="<?= $about->text4 ?>"
                       class="gol_btn"><?= $about->text3 ?><span></span><span></span><span></span><span></span></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt_120">
                <div class="gol_about_img relative">
                    <img src="<?= $about->getPhoto1('570', '470', 'zoomCrop', 'white', 'center', 'center') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Start -->
<div class="gol_partner_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="gol_heading center">
                    <h4 class="text_partner"><?= Yii::t('app', 'Partners') ?></h4>
                </div>
                <div class="partner_slider swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($partners as $partner): ?>
                            <div class="swiper-slide">
                                <div class="gol_partners_container text-center">
                                    <a href="<?= $partner->link ?>">
                                        <img src="<?= $partner->getPhoto1('340', '242') ?>" alt="partner"/>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Infrastructure Section Start -->
<section class="gol_whyUs_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-12 p-0">
                <div class="gol_whyUs_img">
                    <div class="tabs_content">
                        <?php $i = 1 ?>
                        <?php foreach ($infrastructures as $one_infrastructure) : ?>
                            <div id="tab<?= $i++ ?>" class="single_tab">
                                <img src="<?= $one_infrastructure->getPhoto1('1080', '1350', 'zoomCrop', 'transparent', 'center', 'center') ?>"
                                     alt="partner"/>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-12 gol_green_bg">
                <div class="gol_whyUs_container">
                    <div class="gol_heading">
                        <h4><?= Yii::t('app', 'Infrastructure') ?></h4>
                    </div>
                    <ul class="tabs_nav">
                        <?php $i = 1; ?>
                        <?php foreach ($infrastructures as $one_infrastructure) : ?>
                            <li class=" wow fadeInRight" data-wow-delay="0.01s">
                                <a href="#tab<?= $i++ ?>">
                                    <h4><?= $one_infrastructure->getText1() ?></h4>
                                    <p> <?= $one_infrastructure->getText2() ?></p>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Uzbekistan Map Section Start -->
<section class="gol_team_wrapper">
    <div class="container">
        <div class="row">

            <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12 offset-xl-3 offset-lg-2 offset-md-1 text-center">
                <div class="gol_heading center">
                    <h4><?= Yii::t('app', 'Territorial Offices') ?></h4>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <div id="highlighted" class="clearfix">
                    <div class="region region-highlighted">
                        <section id="block-views-territorial-view-block" class="block block-views">
                            <div class="content">
                                <div class="row view view-territorial-view view-id-territorial_view view-display-id-block view-dom-id-15d0b16a635bf947fb16d5ffa6beb992"
                                     style="align-items: center">
                                    <div class="col-xl-9 col-md-12 col-sm-12 col-12 view-header">
                                        <svg version="1.1"
                                             style="width: 800px; height: 550px; transform-origin: top left;"
                                             class="map-scale">
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path id="UZ-AS" title="Orol dengizi" class="water"
                                                      d="M134.18,8.27L130.78,14.69L129.78,18.12L129.17,21.94L131.19,24.76L132.19,27.78L130.38,30.4L127.56,35.63L126.15,37.84L128.37,36.84L129.98,34.82L131.39,33.82L135.21,34.42L137.63,35.02L137.83,38.25L135.01,38.65L134.81,46.9L132.8,45.89L130.99,46.3L129.17,48.31L129.78,50.73L133,53.34L136.02,55.15L135.01,58.38L135.01,62.4L133.6,65.42L130.78,66.43L128.97,65.42L127.77,62.6L126.15,62.6L126.15,66.02L127.36,67.63L127.56,73.87L127.97,77.9L130.99,79.71L133.2,77.3L135.62,73.07L137.43,69.04L139.84,67.63L142.86,69.24L145.28,68.44L144.47,65.62L143.26,63L142.46,58.38L143.06,55.76L144.47,54.35L146.28,54.15L148.5,54.15L149.5,49.92L152.32,43.88L155.54,38.45L157.56,32.61L157.2,24.88L157.2,24.88L213.98,65.87L213.98,65.87L210.09,66.23L211.1,68.24L212.71,69.65L213.72,71.06L212.91,74.88L210.09,79.91L205.46,84.54L199.22,89.58L197.61,93L198.62,94.81L197.41,96.62L193.99,96.62L193.39,99.24L186.34,102.06L181.51,103.67L176.48,104.67L172.85,103.46L170.84,104.07L167.02,104.87L165.81,103.87L163.39,102.46L159.77,104.67L155.34,104.47L149.3,103.87L146.28,103.46L143.67,101.25L138.43,100.45L136.62,98.63L134.41,97.63L133.4,94L136.22,92.19L138.03,89.98L137.23,86.35L135.62,85.35L133,86.56L127.97,88.17L126.15,88.97L123.74,88.77L122.13,89.17L121.12,91.19L119.11,90.58L116.49,88.57L113.47,88.37L109.45,86.76L106.43,85.35L104.21,82.73L102,77.5L101.6,72.26L104.62,63.81L105.02,61.19L103.01,57.57L101.8,54.75L101.6,48.71L102,44.08L104.01,38.65L107.03,33.82L108.24,28.18L110.86,25.56L111.06,19.73L113.07,16.51L116.9,13.08L117.1,8.25L118.71,5.03L118.88,1.48L118.88,1.48L122.73,0z">
                                                </path>
                                                <?php foreach ($regions as $region): ?>
                                                    <path cursor="pointer" id="<?= $region->text4 ?>"
                                                          title="<?= $region->text1 ?>"
                                                          class="<?= $region->text5 ?> <?= $region->text3 ? "simba-zone" : "" ?>"
                                                          d="<?= $region->text6 ?>">
                                                    </path>
                                                <?php endforeach; ?>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="col-xl-3 col-md-12 col-sm-12 col-12  view-content">
                                        <?php foreach ($regions as $region): ?>
                                            <div class="views-row views-row-1 views-row-odd views-row-first">
                                                <div class="views-field views-field-nothing">
                                                <span class="field-content">
                                                    <div class="nid"><?= $region->text4 ?></div>
                                                    <div class="title"><?= $region->text1 ?></div>
                                                    <div class="desc"><?= $region->text2 ?></div>
                                                    <?php if (!empty($region->text3)): ?>
                                                        <a href="<?= $region['link'] ?>" class="gol_btn" style="font-size:16px;"><?= Yii::t('app', 'Read More') ?></a>
                                                    <?php endif; ?>
                                                </span>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Counter Section Start -->
<section class="gol_counter_wrapper overflow_hidden">
    <div class="container">
        <div class="row counter_holder">

            <?php foreach ($counters as $counter): ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="counter_item text-center wow fadeInUp" data-wow-delay="0.1s">
                        <div class="gol_counter_icon"><img src="<?= $counter->getPhoto1('60', '60', 'cropResize', 'transparent', 'center', 'center') ?>" alt=""/></div>
                        <h2><span class="count_no" data-count="<?= $counter->getText2() ?>">0</span><span><?= $counter->getText3() ?></span></h2>
                        <p><?= $counter->getText1() ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!-- Blog Start -->
<section class="gol_blog_wrapper">
    <div class="container">
        <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12 offset-xl-3 offset-lg-2 offset-md-1 text-center">
            <div class="gol_heading center wow fadeInUp" data-wow-delay="0.1s">
                <a href="/e/news"><h4><?= Yii::t('app', 'News') ?></h4></a>
            </div>
        </div>
        <div class="row">

            <div class="partner_slider swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($news as $post): ?>
                        <div class="swiper-slide">
                            <div class="gol_partners_container text-center">
                                <div class="wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="gol_blog_thumb">
                                        <a class="gol_blog_img" href="<?= $post->link ?>">
                                            <img src="<?= $post->getPhoto1('370', '280') ?>" alt="">
                                        </a>
                                        <div class="blog_text">
                                            <a href="<?= $post->link ?>">
                                                <h4 class="gol_blog_title"><?= $post->getText1() ?></h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section Start -->
<section class="gol_college_wrapper" style="padding:72px 0;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12 offset-xl-3 offset-lg-2 offset-md-1 text-center">
                <div class="gol_heading center">
                    <a href="/e/team"><h4><?= Yii::t('app', 'Our Team') ?></h4></a>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="team_slider swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($stafes as $one_staf) : ?>
                            <div class="swiper-slide">
                                <div class="gol_team_section">
                                    <div class="gol_team_img_wrapper">
                                        <div class="gol_team_img">
                                            <img src="<?= $one_staf->getPhoto1('210', '305') ?>"
                                                 alt=""/>

                                        </div>
                                    </div>
                                    <div class="gol_team_identity text-center">
                                        <a><?= $one_staf->getText1() ?></a>
                                    </div>
                                    <div class="text-center">
                                        <a><?= $one_staf->getText2() ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiperPagination"></div>
                <!-- Slider Arrows -->
                <div class="gol_team_button">
                    <div class="swiper-button-next1">
                        <svg version="1.1" class="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                            d="M508.875,248.458l-160-160c-3.063-3.042-7.615-3.969-11.625-2.313c-3.99,1.646-6.583,5.542-6.583,9.854v21.333
                                                    c0,2.833,1.125,5.542,3.125,7.542l109.792,109.792H10.667C4.771,234.667,0,239.437,0,245.333v21.333
                                                    c0,5.896,4.771,10.667,10.667,10.667h432.917L333.792,387.125c-2,2-3.125,4.708-3.125,7.542V416c0,4.313,2.594,8.208,6.583,9.854
                                                    c1.323,0.552,2.708,0.813,4.083,0.813c2.771,0,5.5-1.083,7.542-3.125l160-160C513.042,259.375,513.042,252.625,508.875,248.458z"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="swiper-button-prev1">
                        <svg version="1.1" class="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             viewBox="0 0 512 512" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                            d="M501.333,234.667H68.417l109.792-109.792c2-2,3.125-4.708,3.125-7.542V96c0-4.313-2.594-8.208-6.583-9.854
                                                    c-1.323-0.552-2.708-0.813-4.083-0.813c-2.771,0-5.5,1.083-7.542,3.125l-160,160c-4.167,4.167-4.167,10.917,0,15.083l160,160
                                                    c3.063,3.042,7.615,3.969,11.625,2.313c3.99-1.646,6.583-5.542,6.583-9.854v-21.333c0-2.833-1.125-5.542-3.125-7.542
                                                    L68.417,277.333h432.917c5.896,0,10.667-4.771,10.667-10.667v-21.333C512,239.438,507.229,234.667,501.333,234.667z"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= ContactMapWidget::widget() ?>
