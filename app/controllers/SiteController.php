<?php
/**
 * Created by PhpStorm.
 * User: kakaxi
 * Date: 2018/10/17
 * Time: 20:48
 */


class SiteController extends BaseController
{

    public $defaultAction = "about";

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else {
                echo $error['message'];
                //$this->render('error', $error);
            }

        }
    }

    public function actionAbout()
    {
        $this->renderText("我们采集的只是石头，却必须时刻展望未来的大教堂");
    }
}
