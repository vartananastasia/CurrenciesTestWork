<?php
/**
 * Created by PhpStorm.
 * User: a.vartan
 * Date: 25.12.2018
 * Time: 10:37
 */

class Currency
{
    private $currencies = [];

    public function __construct(array $currencies)
    {
        $this->currencies = $currencies;
    }

    public function saveCurrencies($currencyInCache, $currencyInDataBase = true)
    {
        if (!$currencyInDataBase) {
            /**
             * пишем курсы валют в базу данных
             */
        }
        if (!$currencyInCache) {
            /**
             * пишем курсы валют в кеш
             */
        }
    }

    public function checkCurrenciesExist(): bool
    {
        $currenciesExist = false;
        if (count($this->currencies) > 0) {
            $currenciesExist = true;
        }
        return $currenciesExist;
    }
}