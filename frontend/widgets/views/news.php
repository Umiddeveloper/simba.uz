<?php

/** @var Items $item */
/** @var Items $one_news */

use afzalroq\cms\entities\front\Items;
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="blogSection">
    <div class="blogMainImg">
        <a href="<?=$one_news['link']?>">
             <img src="<?=$one_news->getPhoto1('1170', '600', 'zoomCrop', 'white', 'center', 'center')?>" alt="" />
        </a>
    </div>
    <div class="blogPageInfo">
        <ul>
        <li>
            <i class="fa fa-calendar"></i><?= date("d.m.Y", $one_news->getDate()) ?>
        </li>
        </ul>
    </div>
    <div class="blogPageText">
        <a href="<?=$one_news['link']?>" class="blogHeading"><?=$one_news->getText1()?></a>
        <?php
        $postDesc = strip_tags( $one_news->getText2() );
        if (mb_strlen($postDesc) > 175) {
            $spacePos = mb_strpos($postDesc, ' ', 175);
            $shortPostDesc = mb_substr($postDesc, 0, $spacePos) . ' ...';
        } else {
            $shortPostDesc = $postDesc;
        }
        ?>
        <p>
            <?=$shortPostDesc?>
        </p>
        <div class="gol_about_detail"><a href="<?=$one_news['link']?>" class="gol_btn blogBtn"><?=Yii::t('app','Read More')?><span></span><span></span><span></span><span></span></a></div>
    </div>
</div>
