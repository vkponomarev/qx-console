<?php

namespace console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate;




use console\models\rates\RatesLogs;

/**
 * Логирование всей цепочки работы данного API
 * Логирование доступа к API
 * Логирование обработки JSON
 * Логирование добавления записей
 * Логирование удаления записей
 * Class RatesCryptoLatestApiErhUpdateLogs
 * @package console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate
 */
class RatesCryptoLatestApiErhUpdateLogs
{

    /**
     * RatesCryptoLatestApiErhLogs constructor.
     * @param $apiErhDelete \console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\RatesCryptoLatestApiErhUpdateDelete
     * @throws \Exception
     */
    function __construct($apiErhDelete)
    {
        /**
         * @todo
         * Необходимо записать логи в таблицу rates_logs
         * По аналогии с class RatesCurrenciesLatestApiErhLogs
         */
    }
}

