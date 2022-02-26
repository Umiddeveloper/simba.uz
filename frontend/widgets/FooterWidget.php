<?php

namespace frontend\widgets;

use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use yii\bootstrap\Widget;

class FooterWidget extends Widget
{
    public function run()
    {
        return $this->render('_footer',[
            'news' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'news'])->id])->orderBy(['date_0'=>SORT_DESC])->limit('2')->all()
        ]   );
    }
}
