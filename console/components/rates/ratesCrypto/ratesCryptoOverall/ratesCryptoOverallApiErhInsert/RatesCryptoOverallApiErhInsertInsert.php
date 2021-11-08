<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert;


use console\models\rates\RatesCurrenciesOverall;
use console\models\rates\RatesCryptoOverall;

/**
 * Вставка всех курсов криптовалют данного API за все время в таблицу rates_crypto_overall
 * Class RatesCryptoOverallApiErhInsertInsert
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert
 */
class RatesCryptoOverallApiErhInsertInsert
{

    /**
     * Токен для удаления старых данных
     * @var \console\components\rates\ratesCrypto\ratesCryptoOverall\RatesCryptoOverallToken
     */
    public $token;

    /**
     * Результат чтения API
     * @var \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertRead
     */
    public $apiErhRead;

    /**
     * RatesCryptoOverallApiErhInsertInsert constructor.
     * @param $apiErhRead \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertRead
     * @param $token \console\components\rates\ratesCrypto\ratesCryptoOverall\RatesCryptoOverallToken
     * @throws \Exception
     */
    function __construct($apiErhRead, $token)
    {
        /**
         * @todo
         * По аналогии с RatesCurrenciesOverallApiErhInsertInsert
         * Необходимо записать полученные с API данные в таблицу rates_crypto_overall
         *
         * Только без организаций
         *      $model->api_id = 1;
         *
         * для этого API для криптовалют нет орагнизаций так что вставляем такие занчения:
         *      $model->rates_organizations_id = 0;
         *      $model->rates_organizations_source = '';
         *
         *      $model->base = базовая валюта;
         *      $model->crypto = обозначение криптовалюты;
         *      $model->value = значение курса;
         *      $model->date_time = дата из API и время по серверу
         *      $model->token = $token->token;
         *
         */

        $this->apiErhRead = $apiErhRead;
        $this->token = $token;
        if ($this->apiErhRead->apiResponse) {
            foreach ($this->apiErhRead->apiResponse as $organization) {
                foreach ($this->apiErhRead->apiResponse['crypto'] as $organizationDates) {
                    foreach ($organizationDates->rates as $date => $rates) {
                        foreach ($rates as $currency => $rate) {
                            $model = new RatesCryptoOverall();
                            $model->api_id = 1;
                            $model->rates_organizations_id = 0;
                            $model->rates_organizations_source = '';
                            $model->base = $organizationDates->base;
                            $model->crypto = $currency;
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
