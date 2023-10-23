<?php
class Config {
    private static $config;

    public static function get(string $key) {
        if (self::$config === null) {
            self::$config = parse_ini_file('dev.ini', true);
        }
        $keys = explode('.', $key);
        $value = self::$config;
        foreach ($keys as $k) {
            if (!isset($value[$k])) {
                throw new Exception("La clé de configuration '$key' est introuvable.");
            }
            $value = $value[$k];
        }
        return $value;
    }
}