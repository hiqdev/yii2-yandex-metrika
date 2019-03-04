<?php
/**
 * Yandex.Metrika counter for Yii2 applications
 *
 * @link      https://github.com/hiqdev/yii2-yandex-metrika
 * @package   yii2-yandex-metrika
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017-2019, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\YandexMetrika\tests;

use hiqdev\yii2\YandexMetrika\CodeBuilder;
use Yii;

class CodeBuilderTest extends \PHPUnit\Framework\TestCase
{
    protected $builder;

    protected $id = 12345678;

    protected $params = [
        'cilckmap'              => true,
        'webvisor'              => true,
        'trackLinks'            => true,
        'accurateTrackBounce'   => true,
    ];

    protected function setUp()
    {
        $this->builder = Yii::createObject([
            'class' => CodeBuilder::class,
            'id' => $this->id,
            'params' => $this->params,
        ]);
    }

    public function testRender()
    {
        $sample = file_get_contents(__DIR__ . '/code.html');
        $this->assertSame(trim($sample), trim($this->builder->render()));
    }
}
