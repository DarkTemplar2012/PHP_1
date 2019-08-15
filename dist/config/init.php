<?php

function myDbConnect()
{
    $defaultConfig = require CONFIG_DIR.'db_configs/config.default.php';

    if (!file_exists(ROOT_DIR . 'config/db_configs/config.php')) {
        echo 'Создайте файл конфигурации';
        $localConfig = [];
    } else {
        $localConfig = require ROOT_DIR . 'config/db_configs/config.php';
    }

    $config = array_merge($defaultConfig, $localConfig);

    if (!$mysqli = mysqli_connect(
        $config['db_host'],
        $config['db_user'],
        $config['db_pass'],
        $config['db_name'],
        $config['db_port']

    )) {
        die('Ошибка базы данных');
    }


    return $mysqli;
}
