<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 25.12.2018
 * Time: 10:35
 */

class ReceiveCurrencyFromHttp implements ReceiveCurrency
{
    public static function receive(Currency $currency): array
    {
        /**
         * получаем курсы валют по http
         */
        return $currency->getCurrencies();
    }
}