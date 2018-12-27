<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 25.12.2018
 * Time: 10:34
 */

class ReceiveCurrencyFromDataBase implements ReceiveCurrency
{
    public static function receive(): Currency
    {
        /**
         * получаем курсы валют из базы данных
         */
        $currencies = [];
        $currency = new Currency($currencies);
        if($currency->checkCurrenciesExist()){
            $currencyInCache = false;
            $currency->saveCurrencies($currencyInCache);
        }else{
            $currency = ReceiveCurrencyFromHttp::receive($currency);
        }
        return $currency;
    }
}