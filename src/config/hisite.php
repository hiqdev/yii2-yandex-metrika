<?php
/**
 * Health monitoring for Yii2 applications
 *
 * @link      https://github.com/hiqdev/yii2-monitoring
 * @package   yii2-monitoring
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

if (empty($params['yandex.metrika.id'])) {
    return [];
}

return [
    'bootstrap' => [
        'yandexMetrika' => 'yandexMetrika',
    ],
    'components' => [
        'yandexMetrika' => [
            'class' => \hiqdev\yii2\YandexMetrika\Component::class,
            'id' => $params['yandexMetrika.id'],
            'params' => $params['yandexMetrika.params'],
        ],
    ],
];
