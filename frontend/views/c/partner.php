<?php
/* @var $item afzalroq\cms\entities\front\Items[] */

?>
<div class="main_wrapper">
    <!-- Page Title Start -->
    <section class="page_title_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="page_title_text">
                        <h1><?= $item->getText1() ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Start -->
    <section class="blogPage_wrapper blogPageSingleWrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="blogSection mb-0">
                        <div class="blogMainImg w-50 text-center">
                            <a><img src="<?= $item->getPhoto1(680, 484) ?>" alt=""/></a>
                        </div>
                        <div class="blogPageInfo"></div>
                        <div class="blogPageText">
                            <?= $item->getText2() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
