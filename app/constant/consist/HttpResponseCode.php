<?php
/*
 * @FileName: HttpResponseCode.php
 * @Description: Http返回码
 * @Author: gabbymrh
 * @Date: 2023/12/21 10:19
 * @LastEditor: gabbymrh
 * @LastEditTime: 2023/12/21 10:19
 */

namespace app\constant\consist;

use app\annotation\Constant;
use app\constant\ConstantAbstract;

class HttpResponseCode extends ConstantAbstract
{
    #[Constant(label: '参数有误')]
    const PARAM_ERROR = '10001';

    #[Constant(label: '数据已存在')]
    const DATA_EXIST = '10002';

    #[Constant(label: '数据有误')]
    const DATA_ERROR = '10003';

    #[Constant(label: '请求成功')]
    const REQUEST_SUCCESS = '20000';

    #[Constant(label: '禁止访问')]
    const REQUEST_DENY = '40001';

    #[Constant(label: '权限不足')]
    const REQUEST_WITHOUT_AUTH = '40003';

    #[Constant(label: '查询为空')]
    const QUERY_VOID = '40004';

    #[Constant(label: 'Token无效')]
    const TOKEN_INVALID = '40005';

    #[Constant(label: '请求频繁')]
    const TOO_MANY_REQUEST = '40029';

    #[Constant(label: '请求过期')]
    const REQUEST_EXPIRED = '40030';

    #[Constant(label: '请求失败')]
    const REQUEST_FAIL = '50000';

}