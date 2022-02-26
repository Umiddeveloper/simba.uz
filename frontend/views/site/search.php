<?php

/* @var $news afzalroq\cms\entities\front\Items[] */
/* @var $soni */
/* @var $pagination */

use frontend\widgets\NewsItemWidget;
?>
<div class="main_wrapper">
    <!-- Page Title Start -->
    <section class="page_title_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="page_title_text">
                        <h1> <?= Yii::t('app', 'Result') . " \"" . $text . "\" (".$soni."):"; ?> </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Start -->
    <div class="blogPage_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <?php foreach ($news as $one_news): ?>
                        <?= NewsItemWidget::widget(['one_news' => $one_news]) ?>
                    <?php endforeach; ?>


                    <?php
                    echo \yii\bootstrap4\LinkPager::widget([
                        'pagination' => $pagination,
                        'registerLinkTags' => true
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
