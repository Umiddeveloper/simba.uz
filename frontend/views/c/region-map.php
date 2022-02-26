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
                        <h1><?=$item->getText1()?></h1>
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
                        <div class="blogPageText">
                            <?=$item->getText3();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>