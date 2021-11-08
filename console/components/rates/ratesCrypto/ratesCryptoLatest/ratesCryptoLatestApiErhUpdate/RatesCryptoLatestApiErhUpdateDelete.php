<?php

namespace console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate;

use console\models\rates\RatesCryptoLatest;

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
        $this->apiErhInsert = $apiErhInsert;
        if ($this->apiErhInsert->apiErhRead->apiResponse) {
            RatesCryptoLatest::deleteAll([
                'AND',
                'api_id' => $this->apiErhInsert->apiErhRead->config->apiId,
                ['!=', 'token', $this->apiErhInsert->token->token],
            ]);
        }
    }
}

