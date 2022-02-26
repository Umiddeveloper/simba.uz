<?php
/* @var $item afzalroq\cms\entities\front\Items[] */
$item->registerMetaTags();
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
                        <div class="blogMainImg">
                            <a><img src="<?=$item->getPhoto1('1170', '600', 'cropResize', 'transparent', 'center', 'center')?>"
                                    alt="" /></a>
                        </div>
                        <div class="blogPageInfo">
                            <ul>
                                <li></li>
                                <li><i class="fa fa-calendar"></i><?=date('Y-m-d',$item->getDate())?></li>
                            </ul>
                        </div>
                        <div class="blogPageText">
                            <?=$item->getText2();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
