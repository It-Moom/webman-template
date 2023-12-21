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
use app\constant\consist\HttpResponseCode;

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
     * 获取常量列表
     * @return array 常量列表
     */
    public static function getList(): array
    {
        $reflector = new \ReflectionClass(static::class);
        $constants = $reflector->getConstants();
        $result = [];
        foreach ($constants as $value) {
            $result[] = [
                'label' => HttpResponseCode::getLabel($value),
                'value' => $value,
            ];
        }
        return $result;
    }
}