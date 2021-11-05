<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate;


/**
 * Вставка курсов валют недостающих по датам в общей таблице курсов валют rates_currencies_overall
 * Class RatesCurrenciesOverallApiErhUpdateInsert
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate
 */
class RatesCurrenciesOverallApiErhUpdateInsert
{

    /**
     * Результат чтения API
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateRead
     */
    public $apiErhRead;

    /**
     * RatesCurrenciesOverallApiErhUpdateUpdate constructor.
     * @param $apiErhRead \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateRead
     * @param $token \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\RatesCurrenciesOverallToken
     * @throws \Exception
     */
    function __construct($apiErhRead)
    {

        /**
        $this->apiErhRead = $apiErhRead;
        $this->apiErhRead->apiErhDateRanges->latest;
        $this->apiErhRead->apiErhDateRanges->latest->latest;
        $this->apiErhRead->apiErhDateRanges->latest->logDbEmpty;
        $this->apiErhRead->apiErhDateRanges->latest->configs;
        $this->apiErhRead->apiErhDateRanges->latest->organizations;
        $this->apiErhRead->apiErhDateRanges->dateRanges;
        $this->apiErhRead->apiErhDateRanges->logDbActualData;
         */

        /**
         * @todo
         * По аналогии с RatesCurrenciesOverallApiErhInsertInsert
         * Необходимо записать полученные с API данные в таблицу rates_crypto_overall
         *      $model->api_id = 1;
         *      $model->rates_organizations_id = id оганизации;
         *      $model->rates_organizations_source = source организации;
         *      $model->base = базовая валюта;
         *      $model->crypto = обозначение криптовалюты;
         *      $model->value = значение курса;
         *      $model->date_time = дата из API и время по серверу
         *      $model->token = $token->token;
         */
    }
}
