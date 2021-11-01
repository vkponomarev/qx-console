<?php

namespace console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate;


/**
 * Чтение API https://api.exchangerate.host/latest?base=USD&source=crypto
 * Class RatesCryptoLatestApiErhRead
 * @package console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate
 */
class RatesCryptoLatestApiErhUpdateRead
{

    /**
     * Есил возникла ошибка в try catch записываем ее сюда
     * @var \console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\Exception|\Exception|int
     */
    public $logErrorApiException = 0;

    /**
     * Если произошла ошибка чтения ссылки API ошибку ставим 1
     * @var int
     */
    public $logErrorApiAccess = 0;

    /**
     * Ответ чтения API Курсов криптовалют
     * @var array
     */
    public $apiResponse = 0;

    /**
     * Конфиг для данного API
     * @var \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    public $config;

    /**
     * RatesCryptoLatestApiErhUpdateRead constructor.
     * @param $config \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    function __construct($config)
    {

        /**
         * @todo
         * Необходимо получить данные из API
         * https://api.exchangerate.host/latest?base=USD&source=crypto
         * По аналогии с class RatesCurrenciesLatestApiErhRead
         * Только без организаций
         *
         */
    }
}

