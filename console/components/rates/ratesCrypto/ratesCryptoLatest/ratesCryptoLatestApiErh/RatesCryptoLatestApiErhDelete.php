<?php

namespace console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErh;

use console\models\rates\RatesCryptoLatest;

/**
 * Удаление старых данных курсов криптовалют из таблицы rates_crypto_latest
 * Class RatesCryptoLatestApiErhDelete
 * @package console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErh
 */
class RatesCryptoLatestApiErhDelete
{

    /**
     * Результат заполнения таблицы rates_crypto_latest
     * @var \console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErh\RatesCryptoLatestApiErhInsert
     */
    public $apiErhInsert;

    /**
     * RatesCurrenciesLatestApiErhDelete constructor.
     * @param $apiErhInsert \console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErh\RatesCryptoLatestApiErhInsert
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

