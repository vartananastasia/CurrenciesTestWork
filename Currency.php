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

    public function __construct()
    {
        $currencyInCache = true;
        $currencyInDataBase = true;
        $this->currencies = ReceiveCurrencyFromCache::receive($this);
        if (!self::checkCurrenciesExist()) {
            $currencyInCache = false;
            $this->currencies = ReceiveCurrencyFromDataBase::receive($this);
            if (!self::checkCurrenciesExist()) {
                $currencyInDataBase = false;
                $this->currencies = ReceiveCurrencyFromHttp::receive($this);
            }
        }
        self::saveCurrencies($currencyInDataBase, $currencyInCache);
    }

    private function saveCurrencies($currencyInDataBase, $currencyInCache)
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

    public function getCurrencies(): array
    {
        return $this->currencies;
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