<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErhUpdate;

use console\models\rates\RatesCurrenciesLatest;

/**
 * Удаление старых данных из таблицы rates_currencies_latest
 * Class RatesCurrenciesLatestApiErhUpdateDelete
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErhUpdate
 */
class RatesCurrenciesLatestApiErhUpdateDelete
{

    /**
     * Результат заполнения таблицы
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErhUpdate\RatesCurrenciesLatestApiErhUpdateInsert
     */
    public $apiErhInsert;

    /**
     * RatesCurrenciesLatestApiErhDelete constructor.
     * @param $apiErhInsert \console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErhUpdate\RatesCurrenciesLatestApiErhUpdateInsert
     */
    function __construct($apiErhInsert)
    {
        $this->apiErhInsert = $apiErhInsert;
        if ($this->apiErhInsert->apiErhRead->apiResponse) {
            RatesCurrenciesLatest::deleteAll([
                'AND',
                'api_id' => $this->apiErhInsert->apiErhRead->config->apiId,
                ['!=', 'token', $this->apiErhInsert->token->token],
            ]);
        }
    }
}

