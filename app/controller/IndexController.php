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
        return HttpResponseUtil::requestSuccess('Welcome to webman API');
    }

    /**
     * http返回code说明
     * @return \support\Response
     */
    public function responseCode()
    {
        return HttpResponseUtil::requestSuccess(HttpResponseCode::getList());
    }

}
