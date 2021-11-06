<?php

namespace console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate;


use console\models\rates\RatesCryptoLatest;

/**
  * Запись дянных из API https://api.exchangerate.host/latest?base=USD&source=crypto
 * В таблицу rates_crypto_latest
 * Class RatesCryptoLatestApiErhUpdateInsert
 * @package console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate
  */
class RatesCryptoLatestApiErhUpdateInsert
{

    /**
     * Результат чтения API
     * @var \console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\RatesCryptoLatestApiErhUpdateRead
     */
    public $apiErhRead;

    /**
     * Токен для обозначения новых данных
     * @var \console\components\rates\ratesCrypto\ratesCryptoLatest\RatesCryptoLatestToken
     */
    public $token;

    /**
     * RatesCryptoLatestApiErhInsert constructor.
     * @param $apiErhRead \console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\RatesCryptoLatestApiErhUpdateRead
     * @param $token \console\components\rates\ratesCrypto\ratesCryptoLatest\RatesCryptoLatestToken
     * @throws \Exception
     */
    function __construct($apiErhRead, $token)
    {

        /**
         * @todo
         * Необходимо записать полученные с API данные в таблицу rates_crypto_latest
         * https://api.exchangerate.host/latest?base=USD&source=crypto
         * По аналогии с class RatesCurrenciesLatestApiErhInsert
         * Только без организаций
         *      $model->api_id = 1;
         *
         * для этого API для криптовалют нет орагнизаций:
         *      $model->rates_organizations_id = 0;
         *      $model->rates_organizations_source = '';
         *
         *      $model->base = базовая валюта;
         *      $model->crypto = обозначение криптовалюты;
         *      $model->value = значение;
         *      $model->date_time = дата из API и время по серверу
         *       $model->token = $token->token;
         *
         */

        $this->apiErhRead = $apiErhRead;
        $this->token = $token;
        if ($this->apiErhRead->apiResponse) {
                foreach ($this->apiErhRead->apiResponse->rates as $currency => $value) {
                    $model = new RatesCryptoLatest();
                    $model->api_id = 1;
                    $model->rates_organizations_id = 0;
                    $model->rates_organizations_source = '';
                    $model->base = $this->apiErhRead->apiResponse->base;
                    $model->value = $value;
                    $model->crypto = $currency;
                    $model->date_time =
                        $this->apiErhRead->apiResponse->date .
                        ' ' .
                        (new \DateTime('now'))->format('H:i:s');
                    $model->token = $token->token;
                    $model->save();
                }

        }

    }
}

