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
        return json(HttpResponseUtil::requestSuccess('Welcome to FastMall API'));
    }

    /**
     * http返回code说明
     * @return \support\Response
     */
    public function responseCode()
    {
        $reflector = new \ReflectionClass(HttpResponseCode::class);
        $constants = $reflector->getConstants();
        $result = [];
        foreach ($constants as $value) {
            $result[] = [
                'label' => HttpResponseCode::getLabel($value),
                'value' => $value,
            ];
        }

        return json(HttpResponseUtil::requestSuccess($result));
    }

}
