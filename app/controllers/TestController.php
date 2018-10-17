<?php
/**
 * Created by PhpStorm.
 * User: kakaxi
 * Date: 2018/10/17
 * Time: 20:45
 */

class TestController extends BaseController
{
    public $defaultAction = "test";


    public function actionTest()
    {
        $this->renderApi(0, "ok", "hello world");
    }
}