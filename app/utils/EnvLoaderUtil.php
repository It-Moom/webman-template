<?php
/*
 * @FileName: EnvLoaderUtil.php
 * @Description: 环境变量加载工具类
 * @Author: gabbymrh
 * @Date: 2023/12/22 10:39
 * @LastEditor: gabbymrh
 * @LastEditTime: 2023/12/22 10:39
 */

namespace app\utils;

class EnvLoaderUtil
{
    /**
     * @var array
     */
    protected static array $env = [];

    public function __construct(public string $envFile)
    {
        if(empty(self::$env)){
            self::$env = $this->loadEnv($envFile);
        }
    }


    /**
     * @param string|null $key
     * @param mixed|null $default
     * @return mixed
     */
    public static function get(string $key = null, mixed $default = null): mixed
    {
        if (is_null($key)) {
            return static::$env;
        }
        return static::$env[$key] ?? $default;
    }

    /**
     * @param string $envFile
     * @return array
     */
    protected function loadEnv(string $envFile): array
    {
        $env = [];
        if (is_file($envFile)) {
            $env = parse_ini_file($envFile, true);
        }
        return $env;
    }
}