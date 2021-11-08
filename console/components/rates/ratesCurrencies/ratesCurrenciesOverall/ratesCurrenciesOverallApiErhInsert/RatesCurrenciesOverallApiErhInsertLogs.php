<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert;

use console\models\rates\RatesLogs;

/**
 * Логирование всей цепочки работы данного API
 * Логирование доступа к API
 * Логирование обработки JSON
 * Логирование добавления записей
 * Логирование удаления записей
 * Class RatesCurrenciesOverallApiErhInsertLogs
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert
 */
class RatesCurrenciesOverallApiErhInsertLogs
{

    function __construct($apiErhDelete)
    {

        $logErrorApiAccess = $apiErhDelete->apiErhInsert->apiErhRead->logErrorApiAccess;
        $logErrorApiException = $apiErhDelete->apiErhInsert->apiErhRead->logErrorApiException;
        $apiResponse = $apiErhDelete->apiErhInsert->apiErhRead->apiResponse;
        $config = $apiErhDelete->apiErhInsert->apiErhRead->config;

        if ($logErrorApiAccess){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 1;
            $model->component = get_class($this);
            $model->message = 'Не удалось получить доступ к API ' . $config->cryptoOverallApi;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r("\r\n" . $model->message . "\r\n");
        }
        if ($logErrorApiException){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 1;
            $model->component = get_class($this);
            $model->message = $logErrorApiException;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r("\r\n" . $model->message . "\r\n");
        }
        if ($apiResponse){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 0;
            $model->component = get_class($this);
            $model->message = 'Обновление rates_currencies_overall всех курсов валют для данного API прошло успешно ' . $config->cryptoOverallApi;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r("\r\n" . $model->message . "\r\n");
        }
        if (!$apiResponse){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 0;
            $model->component = get_class($this);
            $model->message = 'Обновление rates_currencies_overall всех курсов валют для данного API прошло неудачно ' . $config->cryptoOverallApi;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r("\r\n" . $model->message . "\r\n");
        }
    }
}

