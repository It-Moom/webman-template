<?php
/*
 * @FileName: index.php
 * @Description: 默认路由文件
 * @Author: gabbymrh
 * @Date: 2023/12/21 14:47
 * @LastEditor: gabbymrh
 * @LastEditTime: 2023/12/21 14:47
 */

use Webman\Route;

// 入口路由
Route::any('/', [app\controller\IndexController::class, 'index']);
// http返回code说明
Route::any('/response/code', [app\controller\IndexController::class, 'responseCode']);
// 给所有OPTIONS请求设置跨域
Route::options('[{path:.+}]', function (){
  return response();
});