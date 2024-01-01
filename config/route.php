<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

use app\utils\HttpResponseUtil;
use Webman\Route;

// 禁用默认路由
Route::disableDefaultRoute();
// 404异常
Route::fallback(function () {
    return HttpResponseUtil::requestFail('路由有误');
});
// 路由加载
require_once base_path('routes/index.php');






