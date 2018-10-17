<?php
/**
 * Created by PhpStorm.
 * User: kakaxi
 * Date: 2018/10/17
 * Time: 20:46
 */

class BaseController extends CController
{
    /**
     * 统一的API render方法
     * @param $eCode
     * @param $eMsg
     * @param $data
     */
    public function renderApi($eCode, $eMsg, $data)
    {
        $data = array(
            "ecode" => $eCode,
            "emsg" => $eMsg,
            "data" => $data
        );
        $this->renderJSON($data);
    }

    //render json data
    protected function renderJSON($data)
    {
        header('Content-type: application/json');
        echo CJSON::encode($data);

        foreach (Yii::app()->log->routes as $route) {
            if ($route instanceof CWebLogRoute) {
                $route->enabled = false; // disable any weblogroutes
            }
        }
        Yii::app()->end();
    }
}