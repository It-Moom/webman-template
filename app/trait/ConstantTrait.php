<?php
/*
 * @FileName: ConstantTrait.php
 * @Description: 常量扩展
 * @Author: gabbymrh
 * @Date: 2023/12/21 10:46
 * @LastEditor: gabbymrh
 * @LastEditTime: 2023/12/21 10:46
 */

namespace app\trait;

use app\annotation\Constant;

trait ConstantTrait
{
    /**
     * 获取常量名称
     * @param string $value 常量值
     * @return string 常量名称
     */
    public static function getLabel(string $value): string
    {
        $reflectionClass = new \ReflectionClass(static::class);
        // 获取反射上的注解
        $constants = $reflectionClass->getConstants();
        foreach ($constants as $name => $constant) {
            if ($constant === $value) {
                return $reflectionClass->getReflectionConstant($name)->getAttributes(Constant::class)[0]->newInstance()->label;
            }
        }
        return '';
    }

    /**
     * 获取常量值
     * @param string $label 常量名称
     * @return string 常量值
     */
    public static function getList(string $label): array
    {
        $reflectionClass = new \ReflectionClass(static::class);
        $constants = $reflectionClass->getConstants();
        foreach ($constants as $name => $constant) {
            if ($reflectionClass->getConstant($name) === $label) {
                return $constant;
            }
        }
        return '';
    }
}