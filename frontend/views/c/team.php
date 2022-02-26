<?php

/* @var $stafes afzalroq\cms\entities\front\Items[] */

?>
<!-- Page Title Start -->
<section class="page_title_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <div class="page_title_text">
                    <h1><?=Yii::t('app','Our Team')?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gym_gallery_section gym_section_paddTB" style="padding-bottom: 120px;"">
    <div class="container">
        <div class="row">
            <div class="gallery-main-content">
                <div class="gym_team_tab-filter-wrapper">
                    <div class="gym_team_tab-filter">
                        <ul class="gym_team_filters">
                        </ul> <!-- gym_team_filters -->
                    </div> <!-- gym_team_tab-filter -->
                </div> <!-- gym_team_tab-filter-wrapper -->
                <section class="gym_team_gallery">
                    <ul>
                        <?php foreach ($stafes as $one_staf) :?>
                        <li class="mix group-2" style="margin: 10px">
                            <div class="gym_team_box">
                                <div class="gym_teamimg_holder">
                                    <div class="gym_team_overlay"></div>
                                    <img src="<?=$one_staf->getPhoto1('210', '305')?>"
                                        alt="Image 6">
                                    <div class="gym_social_icon">
                                    </div>
                                </div>
                                <div class="gym_team_detail">
                                    <h4><?=$one_staf->getText1()?></h4>
                                    <span><?=$one_staf->getText2()?></span>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </section> <!-- gym_team_gallery -->
            </div> <!-- gym_team_main-content -->
        </div>
    </div>
</section>
