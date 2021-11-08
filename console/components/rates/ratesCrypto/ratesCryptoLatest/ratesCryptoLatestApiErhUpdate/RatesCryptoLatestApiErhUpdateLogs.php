<?php

namespace console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate;




use console\models\rates\RatesLogs;

/**
 * Логирование всей цепочки работы данного API
 * Логирование доступа к API
 * Логирование обработки JSON
 * Логирование добавления записей
 * Логирование удаления записей
 * Class RatesCryptoLatestApiErhUpdateLogs
 * @package console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate
 */
class RatesCryptoLatestApiErhUpdateLogs
{

    /**
     * RatesCryptoLatestApiErhLogs constructor.
     * @param $apiErhDelete \console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\RatesCryptoLatestApiErhUpdateDelete
     * @throws \Exception
     */
    function __construct($apiErhDelete)
    {

        $logErrorApiAccess = $apiErhDelete->apiErhInsert->apiErhRead->logErrorApiAccess;
        $logErrorApiException = $apiErhDelete->apiErhInsert->apiErhRead->logErrorApiException;
        $ApiResponse = $apiErhDelete->apiErhInsert->apiErhRead->apiResponse;
        $config = $apiErhDelete->apiErhInsert->apiErhRead->config;

        if ($logErrorApiAccess){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 1;
            $model->component = get_class($this);
            $model->message = 'Не удалось получить доступ к API ' . $config->cryptoLatestApi;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r($model->message . "\r\n");

        }

        if ($logErrorApiException){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 1;
            $model->component = get_class($this);
            $model->message = $logErrorApiException;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r($model->message . "\r\n");

        }

        if ($ApiResponse){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 0;
            $model->component = get_class($this);
            $model->message = 'Обновление rates_crypto_latest последних курсов валют прошло успешно ' . $config->cryptoLatestApi;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r($model->message . "\r\n");

        }

        if (!$ApiResponse){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 0;
            $model->component = get_class($this);
            $model->message = 'Обновление rates_crypto_latest последних курсов криптовалют не удалось ' . $config->cryptoLatestApi;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r($model->message . "\r\n");

        }

    }
}

