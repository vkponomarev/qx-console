<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert;

use console\models\rates\RatesCurrenciesLatest;
use console\models\rates\RatesCurrenciesOverall;

/**
 * Удаление предыдущих ставленных данных для данного API
 * Class RatesCurrenciesOverallApiErhInsertDelete
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert
 */
class RatesCurrenciesOverallApiErhInsertDelete
{

    /**
     * Результат Вставки данных из API в таблицу rates_currencies_overall
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertInsert
     */
    public $apiErhInsert;

    /**
     * RatesCurrenciesOverallApiErhInsertDelete constructor.
     * @param $apiErhInsert \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertInsert
     */
    function __construct($apiErhInsert)
    {
        $this->apiErhInsert = $apiErhInsert;
        if ($this->apiErhInsert->apiErhRead->apiResponse) {
            RatesCurrenciesOverall::deleteAll([
                'AND',
                'api_id' => $this->apiErhInsert->apiErhRead->config->apiId,
                ['!=', 'token', $this->apiErhInsert->token->token],
            ]);
        }
    }
}

