<?php

namespace frontend\widgets;

use yii\bootstrap\Widget;
use frontend\models\ContactForm;
use Yii;

class ContactMapWidget extends Widget
{
    public function run()
    {
        $contactForm = new ContactForm();

        if($contactForm->load(Yii::$app->request->post()) && $contactForm->validate())
        {
            $contactForm->save();
            Yii::$app->session->setFlash('app', 'Send SuccesFul');
            return $this->refresh();
        }
        return $this->render('contact-map',[
            'contactForm' => $contactForm,]);
    }
}
