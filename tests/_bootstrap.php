<?php
/**
 * README plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-readme
 * @package   hidev-readme
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

error_reporting(E_ALL & ~E_NOTICE);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require \hiqdev\composer\config\Builder::path('tests');
Yii::$app = new \yii\console\Application(array_merge($config, [
    'id' => 'tests',
    'basePath' => dirname(__DIR__),
]));
