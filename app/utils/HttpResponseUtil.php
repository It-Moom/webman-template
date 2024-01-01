<?php
/*
 * @FileName: HttpResponseUtil.php
 * @Description: Http返回工具类
 * @Author: gabbymrh
 * @Date: 2023/12/21 14:23
 * @LastEditor: gabbymrh
 * @LastEditTime: 2023/12/21 14:23
 */

namespace app\utils;

use app\constant\consist\HttpResponseCode;
use support\Response;

class HttpResponseUtil
{
    /**
     * 参数有误
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return array|Response 返回结果
     */
    public static function paramError(?string $message = null, ?array $errors = [])
    {
        return self::handleError(HttpResponseCode::PARAM_ERROR, $message, $errors);
    }

    /**
     * 数据已存在
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return array|Response 返回结果
     */
    public static function dataExists(?string $message = null, ?array $errors = [])
    {
        return self::handleError(HttpResponseCode::DATA_EXIST, $message, $errors);
    }

    /**
     * 数据有误
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return array|Response 返回结果
     */
    public static function dataError(?string $message = null, ?array $errors = [])
    {
        return self::handleError(HttpResponseCode::DATA_ERROR, $message, $errors);
    }

    /**
     * 请求成功
     * @param mixed $data 参数数据
     * @return array|Response 返回结果
     */
    public static function requestSuccess(mixed $data = null)
    {
        return json([
            'code'    => HttpResponseCode::REQUEST_SUCCESS,
            'success' => true,
            'data'    => $data,
            'message' => HttpResponseCode::getLabel(HttpResponseCode::REQUEST_SUCCESS),
            'errors'  => [],
        ]);
    }

    /**
     * 禁止访问
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return array|Response 返回结果
     */
    public static function requestDeny(?string $message = null, ?array $errors = [])
    {
        return self::handleError(HttpResponseCode::REQUEST_DENY, $message, $errors);
    }

    /**
     * 权限不足
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return array|Response 返回结果
     */
    public static function withoutAuth(?string $message = null, ?array $errors = [])
    {
        return self::handleError(HttpResponseCode::REQUEST_WITHOUT_AUTH, $message, $errors);
    }

    /**
     * 查询为空
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return array|Response 返回结果
     */
    public static function queryVoid(?string $message = null, ?array $errors = [])
    {
        return self::handleError(HttpResponseCode::QUERY_VOID, $message, $errors);
    }

    /**
     * Token无效
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return array|Response 返回结果
     */
    public static function tokenInvalid(?string $message = null, ?array $errors = [])
    {
        return self::handleError(HttpResponseCode::TOKEN_INVALID, $message, $errors);
    }

    /**
     * 请求过于频繁
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return array|Response 返回结果
     */
    public static function tooManyRequest(?string $message = null, ?array $errors = [])
    {
        return self::handleError(HttpResponseCode::TOO_MANY_REQUEST, $message, $errors);
    }

    /**
     * 请求过期
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return array|Response 返回结果
     */
    public static function requestExpired(?string $message = null, ?array $errors = [])
    {
        return self::handleError(HttpResponseCode::REQUEST_EXPIRED, $message, $errors);
    }

    /**
     * 请求失败
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return  array|Response 返回结果
     */
    public static function requestFail(?string $message = null, ?array $errors = [])
    {
        return self::handleError(HttpResponseCode::REQUEST_FAIL, $message, $errors);
    }

    /**
     * 处理错误
     * @param string $code 错误码
     * @param string|null $message 提示信息
     * @param array|null $errors 错误信息
     * @return array|Response
     */
    private static function handleError(string $code, ?string $message, ?array $errors)
    {
        return json([
            'code'    => $code,
            'success' => false,
            'data'    => null,
            'message' => $message ?? HttpResponseCode::getLabel($code),
            'errors'  => $errors,
        ]);
    }
}