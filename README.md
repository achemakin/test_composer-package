# Процессор строк

Краткое описание пакета

## Требования

- PHP 7.0

## Установка

```sh
composer require achemakin/test_composer-package
```

## Использование

```php
<?php

$processor = new StringProcessor();
echo $processor->getLength('my string')' // 9
```
