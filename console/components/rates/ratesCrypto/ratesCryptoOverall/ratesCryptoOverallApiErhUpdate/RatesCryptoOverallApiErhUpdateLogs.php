<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate;

/**
 * Логирование всей цепочки работы данного API в базу лога rates_logs
 * Логирование доступа к API
 * Логирование обработки JSON
 * Логирование добавления записей
 * Логирование удаления записей
 * Class RatesCryptoOverallApiErhUpdateLogs
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate
 */
class RatesCryptoOverallApiErhUpdateLogs
{

    /**
     * RatesCryptoOverallApiErhUpdateLogs constructor.
     * @param $apiErhInsert \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateInsert
     */
    function __construct($apiErhInsert)
    {
        /**
        $this->apiErhInsert = $apiErhInsert;
        $this->apiErhInsert->apiErhRead->apiErhDateRanges->latest;
        $this->apiErhInsert->apiErhRead->apiErhDateRanges->latest->latest;
        $this->apiErhInsert->apiErhRead->apiErhDateRanges->latest->logDbEmpty;
        $this->apiErhInsert->apiErhRead->apiErhDateRanges->latest->configs;
        $this->apiErhInsert->apiErhRead->apiErhDateRanges->latest->organizations;
        $this->apiErhInsert->apiErhRead->apiErhDateRanges->dateRanges;
        $this->apiErhInsert->apiErhRead->apiErhDateRanges->logDbActualData;
        $this->apiErhInsert->apiErhRead->apiResponse;
        $this->apiErhInsert->apiErhRead->logErrorApiException;
        $this->apiErhInsert->apiErhRead->logErrorApiAccess;
        $this->apiErhInsert->apiErhRead->apiErhDateRanges->dateRanges;
         */

        /**
         * @todo
         * по аналогии с RatesCryptoOverallApiErhInsertLogs
         * расписываем все возможные условия с переменными log и запись в базу
         * с соответствующими сообщениями.
         */
    }
}

