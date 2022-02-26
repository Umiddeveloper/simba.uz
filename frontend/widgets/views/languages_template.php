<?php
/* @var $mobile ? */
/* @var $getLinks ? */

 if ($mobile){
    foreach ($getmobil as $mobil){
        echo $mobil;
    }
} else {
    foreach ($getLinks as $link) {
        echo '<li>' . $link . '</li>';
    }
}