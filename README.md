# Yii2 Yandex.Metrika

**Yandex.Metrika counter for Yii2 applications**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/yii2-yandex-metrika/v/stable)](https://packagist.org/packages/hiqdev/yii2-yandex-metrika)
[![Total Downloads](https://poser.pugx.org/hiqdev/yii2-yandex-metrika/downloads)](https://packagist.org/packages/hiqdev/yii2-yandex-metrika)
[![Build Status](https://img.shields.io/travis/hiqdev/yii2-yandex-metrika.svg)](https://travis-ci.org/hiqdev/yii2-yandex-metrika)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/yii2-yandex-metrika.svg)](https://scrutinizer-ci.com/g/hiqdev/yii2-yandex-metrika/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/yii2-yandex-metrika.svg)](https://scrutinizer-ci.com/g/hiqdev/yii2-yandex-metrika/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:yii2-yandex-metrika/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:yii2-yandex-metrika/dev-master)

Provides really easy adding [Yandex.Metrika] counter to site.
Even easier then adding a widget into site layout.

Works by adding Behavior to the Application View.
Behavior listens to [EVENT_END_BODY] and echos the counter script.

[Yandex.Metrika]: https://metrika.yandex.ru
[EVENT_END_BODY]: http://www.yiiframework.com/doc-2.0/yii-web-view.html#EVENT_END_BODY-detail

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/yii2-yandex-metrika"
```

or add

```json
"hiqdev/yii2-yandex-metrika": "*"
```

to the require section of your composer.json.

## Configuration

This extension is supposed to be used with [composer-config-plugin].

Else look [src/config/hisite.php] for cofiguration example.

Available configuration parameters:

- `yandexMetrika.id`
- `yandexMetrika.params`

For more details please see [src/config/params.php].

[composer-config-plugin]:   https://github.com/hiqdev/composer-config-plugin
[src/config/hisite.php]:    src/config/hisite.php
[src/config/params.php]:    src/config/params.php

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2017, HiQDev (http://hiqdev.com/)
