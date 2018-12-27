<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 25.12.2018
 * Time: 10:35
 */

class ReceiveCurrencyFromHttp implements ReceiveCurrency
{
    public static function receive(): Currency
    {
        /**
         * получаем курсы валют по http
         */
        $currencies = [1=>1];
        $currency = new Currency($currencies);
        $currencyInCache = false;
        $currencyInDataBase = false;
        $currency->saveCurrencies($currencyInCache, $currencyInDataBase);
        return $currency;
    }
}