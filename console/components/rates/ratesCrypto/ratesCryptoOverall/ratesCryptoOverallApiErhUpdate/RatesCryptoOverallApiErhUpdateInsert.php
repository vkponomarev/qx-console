<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate;


/**
 * Вставка курсов криптовалют недостающих по датам в таблице rates_crypto_overall
 * Class RatesCryptoOverallApiErhUpdateInsert
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate
 */
class RatesCryptoOverallApiErhUpdateInsert
{

    /**
     * Результат чтения API
     * @var \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateRead
     */
    public $apiErhRead;

    /**
     * RatesCryptoOverallApiErhUpdateUpdate constructor.
     * @param $apiErhRead \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateRead
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
         * По аналогии с RatesCryptoOverallApiErhInsertInsert
         * Проверяем все логи
         * Необходимо записать полученные с API данные в таблицу rates_crypto_overall
         * Обратить внимание на то чтобы не заполнялась дата которая уже есть таблице
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
