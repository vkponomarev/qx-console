<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate;


/**
 * Читаем данные из API.
 * Для всех организаций у которых есть незаполненные даты курсов валют данного API
 * в таблице rates_currencies_overall.
 * https://api.exchangerate.host/2020-01-01?base=USD&source=cbr'
 * Class RatesCurrenciesOverallApiErhUpdateRead
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate
 */
class RatesCurrenciesOverallApiErhUpdateRead
{

    /**
     * Результат выполнения
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateDateRanges
     */
    public $apiErhDateRanges;

    /**
     * Конфигурации текущего API
     * @var \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    public $config;

    /**
     * Массив ответ API курсов валют для всех организаций со всеми диапазонами дат
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
     * RatesCurrenciesOverallApiErhUpdateRead constructor.
     * @param $config \console\components\rates\ratesConfigs\RatesConfigsErh
     * @param $sleepTimeSeconds int время простоя в секундах при множественной обработке API
     * @param $apiErhDateRanges \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateDateRanges
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
         * По аналогии с RatesCurrenciesOverallApiErhInsertRead
         *
         * 0. Проверяем все предыдущие log переменные если проходим выполняем действие:
         * 1. $this->apiErhDateRanges->dateRanges Проходим по массиву организаций
         *      1.1 Проходим по массиву диапазонов дат
         *
         *      1.1.1 Взаимодействуем с API
         *      Пример API https://api.exchangerate.host/2020-04-04?source=cbr
         *      Пример API для организации forex https://api.exchangerate.host/2020-04-04
                $config->currenciesHistoricalApi = 'https://api.exchangerate.host/';
         *
         *      Сохраняем все в массив [организаций] [дат] = массив валюта курс
         *      $this->apiResponse[$source][$date] = rates
         *
         * Если возникли ошибки в каких либо местах записываем ошибки по аналогии
         * public $logErrorApiException = Exception;
         * public $logErrorApiAccess = 1;
         *
         *
         */
    }
}

