<?php

namespace frontend\widgets;

use Yii;
use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class NewsItemWidget extends Widget
{

    public $one_news;

    public function run()
    {
        return $this->render('news', [
            'one_news' => $this->one_news
        ]);
    }
}