<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh;


use console\models\rates\RatesCurrenciesLatest;

/**
 * Запись дянных из API https://api.exchangerate.host/latest?base=USD
 * Class RatesCurrenciesLatestApiErhInsert
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh
 */
class RatesCurrenciesLatestApiErhInsert
{

    /**
     * Результат чтения API
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhRead
     */
    public $apiErhRead;

    /**
     * Токен для обозначения новых данных
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesLatest\RatesCurrenciesLatestToken
     */
    public $token;

    /**
     * RatesCurrenciesLatestApiErhInsert constructor.
     * @param $apiErhRead \console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhRead
     * @param $token \console\components\rates\ratesCurrencies\ratesCurrenciesLatest\RatesCurrenciesLatestToken
     * @throws \Exception
     */
    function __construct($apiErhRead, $token)
    {
        $this->apiErhRead = $apiErhRead;
        $this->token = $token;
        if ($this->apiErhRead->apiResponse) {
            foreach ($this->apiErhRead->ratesOrganizationsErh->organizations as $organization) {
                foreach ($this->apiErhRead->apiResponse[$organization['source']]->rates as $currency => $value) {
                    $model = new RatesCurrenciesLatest();
                    $model->api_id = 1;
                    $model->rates_organizations_id = $organization['id'];
                    $model->rates_organizations_source = $organization['source'];
                    $model->base = $this->apiErhRead->apiResponse[$organization['source']]->base;
                    $model->currency = $currency;
                    $model->value = $value;
                    $model->date_time =
                        $this->apiErhRead->apiResponse[$organization['source']]->date .
                        ' ' .
                        (new \DateTime('now'))->format('H:i:s');
                    $model->token = $token->token;
                    $model->save();
                }
            }
        }
    }
}

