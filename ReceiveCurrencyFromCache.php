<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 25.12.2018
 * Time: 10:33
 */

class ReceiveCurrencyFromCache implements ReceiveCurrency
{
    public static function receive(Currency $currency): array
    {
        /**
         * получаем курсы валют из кеш
         */
        return $currency->getCurrencies();
    }
}