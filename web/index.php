<?php

// comment out the following two lines when deployed to production
//YII_ENV может принимать следующие значения:
//prod: окружение production, т.е. эксплуатационный режим сервера. Константа YII_ENV_PROD установлена в true. Значение по умолчанию.
//dev: окружение development, т.е. режим для разработки. Константа YII_ENV_DEV установлена в true.
//test: окружение testing, т.е. режим для тестирования. Константа YII_ENV_TEST установлена в true.

//Отладка
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
