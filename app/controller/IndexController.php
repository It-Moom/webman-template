<?php

namespace app\controller;

use app\constant\consist\HttpResponseCode;
use app\utils\HttpResponseUtil;

class IndexController
{
    /**
     * 项目首页
     * @return \support\Response
     */
    public function index()
    {
        return json(HttpResponseUtil::requestSuccess('Welcome to webman API'));
    }

    /**
     * http返回code说明
     * @return \support\Response
     */
    public function responseCode()
    {
        return json(HttpResponseUtil::requestSuccess(HttpResponseCode::getList()));
    }

}
