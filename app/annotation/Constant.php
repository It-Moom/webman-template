<?php
/*
 * @FileName: Constant.php
 * @Description: 常量注解
 * @Author: gabbymrh
 * @Date: 2023/12/21 10:24
 * @LastEditor: gabbymrh
 * @LastEditTime: 2023/12/21 10:24
 */

namespace app\annotation;

use Attribute;

#[Attribute]
class Constant
{
    /**
     * @param string $label 常量名称
     */
    public function __construct(public string $label)
    {
    }

}