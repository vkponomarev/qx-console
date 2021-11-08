<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert;


/**
 * Читаем данные из API
 * https://api.exchangerate.host/timeseries?base=USD&source=crypto&start_date=2020-01-01&end_date=2020-01-04'
 * Class RatesCryptoOverallApiErhInsertRead
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert
 */
class RatesCryptoOverallApiErhInsertRead_
{

    /**
     * Конфигурации текущего API
     * @var \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    public $configs;

    /**
     * Массив ответ API курсов криптовалют по всем диапазонам дат
     * @var array
     */
    public $apiResponse = array();

    /**
     * Есил возникла ошибка в try catch записываем ее сюда
     * @var
     */
    public $logErrorApiException = 0;

    /**
     * Если произошла ошибка чтения ссылки API ошибку ставим 1
     * @var int
     */
    public $logErrorApiAccess = 0;

    /**
     * RatesCryptoOverallApiErhInsertRead constructor.
     * @param $configs \console\components\rates\ratesConfigs\RatesConfigsErh
     * @param $sleepTimeSeconds int время простоя в секундах при множественной обработке API
     * @param $cryptoRanges \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertDateRanges
     */
    function __construct($configs, $sleepTimeSeconds, $cryptoRanges)
    {
        /**
         * @todo
         * По аналогии с RatesCurrenciesOverallApiErhInsertRead
         * Получаем API курсов криптовалют для каждого отрезка $cryptoRanges
         * $configs->cryptoOverallApi = https://api.exchangerate.host/timeseries?base=USD&source=crypto
         * https://api.exchangerate.host/timeseries?base=USD&source=crypto&start_date=2020-01-01&end_date=2020-01-04'
         *
         * Здесь без орагнизаций, работа только с диапазоном дат
         */
    }
}

