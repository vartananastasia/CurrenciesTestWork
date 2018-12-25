<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 25.12.2018
 * Time: 10:34
 */

class ReceiveCurrencyFromDataBase implements ReceiveCurrency
{
    public static function receive(Currency $currency): array
    {
        /**
         * получаем курсы валют из базы данных
         */
        return $currency->getCurrencies();
    }
}