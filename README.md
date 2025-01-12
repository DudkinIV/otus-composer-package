# Процессор чисел

Помощь с числами. Например нахождения максимума из 2 чисел;

## Требования

- PHP 8.2

## Установка

composer require dudkin_id/otus_composer_package

## Использование

<?php  
  
$processor = new NumberProcessor();  
echo $processor->max(2, 5); // 5
