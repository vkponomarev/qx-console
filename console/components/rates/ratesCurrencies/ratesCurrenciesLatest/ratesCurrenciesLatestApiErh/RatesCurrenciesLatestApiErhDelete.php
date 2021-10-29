<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh;

use console\models\rates\RatesCurrenciesLatest;

/**
 * Удаление старых данных из таблицы rates_currencies_latest
 * Class RatesCurrenciesLatestApiErhDelete
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh
 */
class RatesCurrenciesLatestApiErhDelete
{

    /**
     * Результат заполнения таблицы
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhInsert
     */
    public $apiErhInsert;

    /**
     * RatesCurrenciesLatestApiErhDelete constructor.
     * @param $apiErhInsert \console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhInsert
     * @param $config \console\components\rates\ratesConfigs\RatesConfigsErh
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

