<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert;


/**
 * Удаление предыдущих данных для данного API
 * Class RatesCryptoOverallApiErhInsertDelete
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert
 */
class RatesCryptoOverallApiErhInsertDelete
{

    /**
     * Результат Вставки данных из API в таблицу rates_crypto_overall
     * @var \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertInsert
     */
    public $apiErhInsert;

    /**
     * RatesCryptoOverallApiErhInsertDelete constructor.
     * @param $apiErhInsert \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertInsert
     */
    function __construct($apiErhInsert)
    {
        /**
         * @todo
         * По аналогии с RatesCurrenciesOverallApiErhInsertDelete
         * Необходимо необходимо удалить старые данные rates_crypto_overall
         *
         * Удаляем данные где
         * $apiId = из конфига
         * и
         * $token из базы <> $token полученный при выполнении предыдущего кода
         *
         * Таки образом мы внесли все данные текущие данные и прописали там $token и $apiId
         * И теперь удаляем те данные этого $apiId которые были там до этого внесения данных
         */
    }
}

