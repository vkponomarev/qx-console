<?php

namespace console\components\rates\ratesOrganizations\ratesOrganizationsApiErh;


/**
 * Чтение API списка организаций https://api.exchangerate.host/sources
 * Class RatesOrganizationsApiErhRead
 * @package console\components\rates\ratesOrganizations\ratesOrganizationsApiErh
 */
class RatesOrganizationsApiErhRead
{

    /**
     * Есил возникла ошибка в try catch записываем ее сюда
     * @var \console\components\rates\ratesOrganizations\ratesOrganizationsApiErh\Exception|\Exception|int
     */
    public $logErrorApiException = 0;

    /**
     * Если произошла ошибка чтения ссылки API ошибку ставим как 1
     * @var int
     */
    public $logErrorApiAccess = 0;

    /**
     * Ответ работы API если все прошло успешно
     * @var int|mixed
     */
    public $apiResponse = 0;

    public $dbCheck;
    public $config;

    /**
     * RatesOrganizationsApiErhRead constructor.
     * @param $dbCheck \console\components\rates\ratesOrganizations\ratesOrganizationsApiErh\RatesOrganizationsApiErhCheckEmpty
     * @param $config \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    function __construct($dbCheck, $config)
    {

        $this->dbCheck = $dbCheck;
        $this->config = $config;

        if ($this->dbCheck->empty) {

            $responseJson = @file_get_contents($this->config->organizationsApi);
            //$responseJson = @file_get_contents($config->organizationsApi);

            if (false !== $responseJson) {

                try {

                    $response = json_decode($responseJson);

                    if ($response->success === true) {

                        $this->apiResponse = $response;

                    }

                } catch (Exception $e) {

                    $this->logErrorApiException = $e;

                }

            } else {

                $this->logErrorApiAccess = 1;

            }
        }
    }

}

