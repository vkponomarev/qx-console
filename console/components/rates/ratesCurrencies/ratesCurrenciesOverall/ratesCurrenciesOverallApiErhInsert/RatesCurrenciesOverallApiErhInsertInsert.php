<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert;


use console\models\rates\RatesCurrenciesOverall;

/**
 * Вставка всех курсов валют данного API за все время в таблицу rates_currencies_overall
 * Class RatesCurrenciesOverallApiErhInsertInsert
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert
 */
class RatesCurrenciesOverallApiErhInsertInsert
{

    /**
     * Токен для удаления старых данных
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\RatesCurrenciesOverallToken
     */
    public $token;

    /**
     * Результат чтения API
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertRead
     */
    public $apiErhRead;

    /**
     * RatesCurrenciesOverallApiErhInsertInsert constructor.
     * @param $apiErhRead \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertRead
     * @param $token \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\RatesCurrenciesOverallToken
     * @throws \Exception
     */
    function __construct($apiErhRead, $token)
    {
        $this->apiErhRead = $apiErhRead;
        $this->token = $token;
        if ($this->apiErhRead->apiResponse) {
            foreach ($this->apiErhRead->organizationsRanges->organizations->organizations as $organization) {
                foreach ($this->apiErhRead->apiResponse[$organization->source] as $organizationDates) {
                    foreach ($organizationDates->rates as $date => $rates) {
                        foreach ($rates as $currency => $rate) {
                            $model = new RatesCurrenciesOverall();
                            $model->api_id = 1;
                            $model->rates_organizations_id = $organization->id;
                            $model->rates_organizations_source = $organization->source;
                            $model->base = $organizationDates->base;
                            $model->currency = $currency;
                            $model->value = $rate;
                            $model->date_time =
                                $date .
                                ' ' .
                                (new \DateTime('now'))->format('H:i:s');
                            $model->token = $token->token;
                            $model->save();
                        }
                    }
                }
            }
        }
    }
}
