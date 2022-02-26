<?php

namespace frontend\controllers;

use afzalroq\cms\entities\Collections;
use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\entities\front\Options;
use afzalroq\cms\entities\OaI;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;


class CController extends Controller
{

    public function actionCollection(string $c)
    {
    }

    public function actionEntity(string $e)
    {
        if ($e === 'news') {
            $news = Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'news'])->id])->orderBy(['date_0'=>SORT_DESC]);
            $countQuery = clone $news;
            $pagination = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 12]);
            $pagination->pageSizeParam = false;
            $pagination->forcePageParam = false;
            $result = $news->offset($pagination->offset)
                ->limit($pagination->limit)
                ->all();
            return $this->render('blog', [
                'news' => $result,
                'pagination' => $pagination
            ]);
        }

        if ($e === 'team') {
            return $this->render('team', [
                'stafes' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'team'])->id])->all(),
            ]);
        }
    }

    public function actionItem(string $e, int $i)
    {
        if ($e === 'pages') {
            $item = Items::find()->where(['slug'=>'about'])->one();
            return $this->render('about', [
                'item' => $item,
            ]);
        }
        
        if ($e === 'partners') {
            return $this->render('partner', [
                'item' => Items::findOne($i),
            ]);
        }

        if ($e === 'news') {
            return $this->render('single-blog', [
                'item' => Items::findOne($i),
            ]);
        }

        if ($e === 'map') {
            return $this->render('region-map', [
                'item' => Items::findOne($i),
            ]);
        }
    }
}
