<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert;

/**
 * Создаем массив с диапазоном дат для каждой органиции. для API
 * https://api.exchangerate.host/timeseries?start_date=2020-01-01&end_date=2020-01-04'
 * Class RatesCryptoOverallApiErhInsertDateRanges
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert
 */
class RatesCryptoOverallApiErhInsertDateRanges
{

    /**
     * Список диапазонов дат для каждой органицации данного API
     * @var array
     */
    public $cryptoRanges = array();

    /**
     * RatesCryptoOverallApiErhInsertDateRanges constructor.
     * @param $configs \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    function __construct($configs)
    {
        /**
         * @todo
         * По аналогии с RatesCurrenciesOverallApiErhInsertDateRanges
         * Необходимо поделить диапазон дат от $configs->cryptoOverallApiDateRangeStart до сегодня
         * на отрезки не более 365 дней.
         * Поскольу 365 дней это лимит данного API для выборки курсов по диапазону дат.
         *
         * Здесь без орагнизаций, работа только с данным отрезком
         *
         */
    }
}

