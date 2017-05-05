<?php
/**
 * Yandex.Metrika counter for Yii2 applications.
 *
 * @link      https://github.com/hiqdev/yii2-yandex-metrika
 * @package   yii2-yandex-metrika
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

Yii::$app = new \yii\console\Application([
    'id' => 'tests',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@hiqdev/yii2/YandexMetrika' => dirname(__DIR__) . '/src',
    ],
]);
