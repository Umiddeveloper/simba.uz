<?php

namespace frontend\controllers;

use afzalroq\cms\entities\Entities;
use afzalroq\cms\entities\front\Items;
use afzalroq\cms\helpers\SearchHelper;
use common\models\Feedback;
use common\models\Telegram;
use frontend\models\ContactForm;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $contactForm = new ContactForm();

        if($contactForm->load(Yii::$app->request->post()) && $contactForm->validate())
        {
            $contactForm->save();
            Yii::$app->session->setFlash('success', Yii::t('app','Thank you for contacting us. We will respond to you as soon as possible.'));
            return $this->refresh();
        }
        return $this->render('index',[
            'contactForm' => $contactForm,
            'slides' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'slayd'])->id])->orderBy(['id'=>SORT_DESC])->all(),
            'about' => Items::find()->where(['id' =>'27'])->one(),
            'partners' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'partners'])->id])->all(),
            'news' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'news'])->id])->orderBy(['date_0'=>SORT_DESC])->limit('7')->all(),
            'infrastructures' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'infrastructure'])->id])->all(),
            'stafes' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'team'])->id])->all(),
            'regions' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'map'])->id])->all(),
            'counters' => Items::find()->where(['entity_id' => Entities::findOne(['slug' => 'counters'])->id])->all(),
        ]);
    }

    public function actionContacts()
    {
        $contactForm = new ContactForm();
        ($contactForm->load(Yii::$app->request->post()));
        if($contactForm->load(Yii::$app->request->post()) && $contactForm->validate())
        {
            $contactForm->save();
            Yii::$app->session->setFlash('success', Yii::t('app','Thank you for contacting us. We will respond to you as soon as possible.'));
            return $this->refresh();
        }
        return $this->render('contact',[
            'contactForm' => $contactForm,]);

    }


    public function actionSearch()
    {
        $language=$_SESSION['_language'];
        if($language=='uz') {
            $item='text_1_1';
            $item2='text_2_1';
        } elseif ($language=='ru') {
            $item='text_1_0';
            $item2='text_2_0';
        } else {
            $item='text_1_2';
            $item2='text_2_2';
        }

        $text = Yii::$app->request->get("text");
        $text = SearchHelper::validate($text);
        if (empty($text) or ($text=="")) {
            return $this->redirect(Yii::$app->request->referrer);
        }
        $news = Items::find()->Where(['entity_id' => Entities::findOne(['slug' => 'news'])->id]);
        $news->andWhere(['like', $item, $text])->andWhere(['like', $item2, $text]);

        $countQuery = clone $news;
        $pagination = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => 12]);
        $pagination->pageSizeParam = false;
        $pagination->forcePageParam = false;
        $result = $news->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('search', [
            'news' => $result,
            'soni' => count($result),
            'pagination' => $pagination,
            'text' => $text,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
