<?php
/*
 * @FileName: CommonBusinessException.php
 * @Description: 通用异常类
 * @Author: gabbymrh
 * @Date: 2024/1/2 15:16
 * @LastEditor: gabbymrh
 * @LastEditTime: 2024/1/2 15:16
 */

namespace app\exception;

use app\constant\consist\HttpResponseCode;
use support\exception\BusinessException;
use Throwable;
use Webman\Http\Request;
use Webman\Http\Response;

class CommonBusinessException extends BusinessException
{

    /**
     * 通用异常处理
     * @param string $statusCode 状态码
     * @param string $message 异常信息
     * @param array $errors 错误信息
     * @param int $code 异常码
     * @param Throwable|null $previous 上一个异常
     */
    public function __construct(public string $statusCode, string $message = "", public array $errors = [], int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render(Request $request): ?Response
    {
        return json([
            'code'    => $this->statusCode,
            'success' => false,
            'data'    => null,
            'message' => $this->message ?: HttpResponseCode::getLabel($this->statusCode),
            'errors'  => $this->errors,
        ]);
    }
}