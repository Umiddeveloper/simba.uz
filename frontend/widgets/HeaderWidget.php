<?php

namespace frontend\widgets;

use yii\bootstrap\Widget;

class HeaderWidget extends Widget
{

    public function run()
    {
        return $this->render('_header');
    }
}
