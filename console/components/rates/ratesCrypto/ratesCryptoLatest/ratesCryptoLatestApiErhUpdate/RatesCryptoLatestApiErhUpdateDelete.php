<?php

namespace console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate;

/**
 * Удаление старых данных курсов криптовалют из таблицы rates_crypto_latest
 * Class RatesCryptoLatestApiErhUpdateDelete
 * @package console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate
 */
class RatesCryptoLatestApiErhUpdateDelete
{

    /**
     * Результат заполнения таблицы rates_crypto_latest
     * @var \console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\RatesCryptoLatestApiErhUpdateInsert
     */
    public $apiErhInsert;

    /**
     * RatesCurrenciesLatestApiErhDelete constructor.
     * @param $apiErhInsert \console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\RatesCryptoLatestApiErhUpdateInsert
     */
    function __construct($apiErhInsert)
    {
        /**
         * @todo
         * Необходимо необходимо удалить старые данные rates_crypto_latest
         * используя токен для вычисления старых данных
         * https://api.exchangerate.host/latest?base=USD&source=crypto
         * По аналогии с class RatesCurrenciesLatestApiErhDelete
         */
    }
}

