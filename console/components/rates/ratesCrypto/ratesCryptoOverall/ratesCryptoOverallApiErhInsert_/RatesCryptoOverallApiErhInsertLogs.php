<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert;


/**
 * Логирование всей цепочки работы данного API
 * Логирование доступа к API
 * Логирование обработки JSON
 * Логирование добавления записей
 * Логирование удаления записей
 * Class RatesCryptoOverallApiErhInsertLogs
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert
 */
class RatesCryptoOverallApiErhInsertLogs_
{

    /**
     * RatesCryptoOverallApiErhInsertLogs constructor.
     * @param $apiErhDelete \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertDelete
     */
    function __construct($apiErhDelete)
    {
        $logErrorApiAccess = $apiErhDelete->apiErhInsert->apiErhRead->logErrorApiAccess;
        $logErrorApiException = $apiErhDelete->apiErhInsert->apiErhRead->logErrorApiException;
        $apiResponse = $apiErhDelete->apiErhInsert->apiErhRead->apiResponse;
        $config = $apiErhDelete->apiErhInsert->apiErhRead->config;

        /**
         * @todo
         * Необходимо записать логи в таблицу rates_logs
         * По аналогии с class RatesCurrenciesLatestApiErhLogs
         */
    }
}

