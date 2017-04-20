<?php
/**
 * Yandex.Metrika counter for Yii2 applications
 *
 * @link      https://github.com/hiqdev/yii2-yandex-metrika
 * @package   yii2-yandex-metrika
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\YandexMetrika;

use yii\base\Application;
use yii\base\BootstrapInterface;

class Component extends \yii\base\Component implements BootstrapInterface
{
    public $id;

    public $params = [];

    public function bootstrap(Application $app)
    {
    }
}
