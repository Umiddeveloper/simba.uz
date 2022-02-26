<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="main_wrapper">
    <!-- Page Title Start -->
    <section class="page_title_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="page_title_text">
                        <h1><?=Yii::t('app','Not Found (#404)')?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="blogPage_wrapper">

        <div class="container" style="min-height: 350px; text-align: center;">
            <h1><?=Yii::t('app','Not Found (#404)')?></h1>
            <p>
                <?=Yii::t('app','The above error occurred while the Web server was processing your request')?>
            </p>
            <p>
                <?=Yii::t('app','Please contact us if you think this is a server error. Thank you.')?>
            </p>
        </div>
    </div>
</div>