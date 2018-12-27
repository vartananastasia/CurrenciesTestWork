<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 25.12.2018
 * Time: 10:33
 */


class ReceiveCurrencyFromCache implements ReceiveCurrency
{
    public static function receive(): Currency
    {
        /**
         * получаем курсы валют из кеш
         */
        $currencies = [];
        $currency = new Currency($currencies);
        if (!$currency->checkCurrenciesExist()) {
            $currency = ReceiveCurrencyFromDataBase::receive($currency);
        }
        return $currency;
    }
}