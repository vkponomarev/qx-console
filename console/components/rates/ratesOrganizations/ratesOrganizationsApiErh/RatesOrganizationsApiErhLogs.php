<?php

namespace console\components\rates\ratesOrganizations\ratesOrganizationsApiErh;

use console\models\rates\RatesLogs;

/**
 * Логирование того что произошло в таблицу rates_logs
 * Логирование доступа к API
 * Логирование обработки JSON
 * Логирование добавления записей
 * Логирование заполненности таблицы
 * Class RatesOrganizationsApiErhReadLogs
 * @package console\components\rates\ratesOrganizations\ratesOrganizationsApiErh
 */
class RatesOrganizationsApiErhLogs
{

    /**
     * RatesOrganizationsApiErhLogs constructor.
     * @param $apiErhInsert \console\components\rates\ratesOrganizations\ratesOrganizationsApiErh\RatesOrganizationsApiErhInsert
     * @param $config
     * @throws \Exception
     */
    function __construct($apiErhInsert)
    {

        $logErrorApiAccess = $apiErhInsert->apiErhRead->logErrorApiAccess;
        $logErrorApiException = $apiErhInsert->apiErhRead->logErrorApiException;
        $ApiResponse = $apiErhInsert->apiErhRead->apiResponse;
        $config = $apiErhInsert->apiErhRead->config;
        $dbCheck = $apiErhInsert->apiErhRead->dbCheck;

        if ($logErrorApiAccess){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 1;
            $model->component = get_class($this);
            $model->message = 'Не удалось получить доступ к API ' . $config->organizationsApi;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r($model->message . "\r\n");

        }

        if ($logErrorApiException){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 1;
            $model->component = get_class($this);
            $model->message = $apiErhInsert->apiErhRead->logErrorApiException;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r($model->message . "\r\n");

        }

        if (!$dbCheck->empty){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 0;
            $model->component = get_class($this);
            $model->message = 'Организации уже заполнены для этого API ' . $config->organizationsApi;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r($model->message . "\r\n");

        }

        if ($dbCheck->empty){
            $model = new RatesLogs();
            $model->api_id = 1;
            $model->error = 0;
            $model->component = get_class($this);
            $model->message = 'Организации заполнены из API ' . $config->organizationsApi;
            $model->date_time = (new \DateTime('now'))->format('Y-m-d H:i:s');
            $model->save();
            print_r($model->message . "\r\n");

        }


    }
}

