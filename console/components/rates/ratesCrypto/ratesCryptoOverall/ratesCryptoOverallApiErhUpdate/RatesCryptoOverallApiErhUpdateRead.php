<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate;


/**
 * Читаем данные из API.
 * Для всех дат для которых не заполнены курсы криптовалют для данного API
 * в таблице rates_crypto_overall.
 * Class RatesCryptoOverallApiErhUpdateRead
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate
 */
class RatesCryptoOverallApiErhUpdateRead
{

    /**
     * Результат выполнения
     * @var \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateDateRanges
     */
    public $apiErhDateRanges;

    /**
     * Конфигурации текущего API
     * @var \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    public $config;

    /**
     * Массив ответ API курсов криптовалют для всего диапазона дат
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
     * RatesCryptoOverallApiErhUpdateRead constructor.
     * @param $config \console\components\rates\ratesConfigs\RatesConfigsErh
     * @param $sleepTimeSeconds int время простоя в секундах при множественной обработке API
     * @param $apiErhDateRanges \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateDateRanges
     */
    function __construct($config, $sleepTimeSeconds, $apiErhDateRanges)
    {
        /**
        $this->apiErhDateRanges = $apiErhDateRanges;
        $this->apiErhDateRanges->latest;
        $this->apiErhDateRanges->latest->latest;
        $this->apiErhDateRanges->latest->logDbEmpty;
        $this->apiErhDateRanges->latest->configs;
        $this->apiErhDateRanges->latest->organizations;
        $this->apiErhDateRanges->dateRanges;
        $this->apiErhDateRanges->logDbActualData;
         */

        /**
         * @todo
         * По аналогии с RatesCryptoOverallApiErhInsertRead
         *
         * 0. Проверяем все предыдущие log переменные если проходим выполняем действие:
         * 1. $this->apiErhDateRanges->dateRanges Проходим по массиву дат
         *
         *      1.1 Взаимодействуем с API
         *          Пример API https://api.exchangerate.host/2020-04-04?source=crypto
                    $config->cryptoHistoricalApi = 'https://api.exchangerate.host/';
         *
         *          Сохраняем все в массив [организаций] [дат] = массив валюта курс
         *          $this->apiResponse[$source][$date] = rates
         *
         * Если возникли ошибки в каких либо местах записываем ошибки по аналогии
         * public $logErrorApiException = Exception;
         * public $logErrorApiAccess = 1;
         *
         */
    }
}

