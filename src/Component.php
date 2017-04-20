<?php

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
