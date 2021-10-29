<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh;


/**
 * Чтение API https://api.exchangerate.host/latest?base=USD
 * Class RatesCurrenciesLatestApiErhRead
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh
 */
class RatesCurrenciesLatestApiErhRead
{

    /**
     * Есил возникла ошибка в try catch записываем ее сюда
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\Exception|\Exception|int
     */
    public $logErrorApiException = 0;
    /**
     * Если произошла ошибка чтения ссылки API ошибку ставим 1
     * @var int
     */
    public $logErrorApiAccess = 0;
    /**
     * Ответ API Курсы валют каждой организации в отдельности в виде массива
     * @var array
     */
    public $apiResponse = array();

    /**
     * @var \console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId
     */
    public $ratesOrganizationsErh;
    public $config;
    /**
     * RatesCurrenciesLatestApiErhRead constructor.
     * @param $config \console\components\rates\ratesConfigs\RatesConfigsErh
     * @param $ratesOrganizationsErh \console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId
     * @param $token
     */
    function __construct($config, $ratesOrganizationsErh)
    {

        $this->config = $config;
        $this->ratesOrganizationsErh = $ratesOrganizationsErh;

        foreach ($ratesOrganizationsErh->organizations as $organization) {

            sleep(1);

            $apiUrl =
                ($organization->source <> 'forex') ?
                    $this->config->currenciesLatestApi . '&source=' . $organization->source :
                    $this->config->currenciesLatestApi;

            $responseJson = @file_get_contents($apiUrl);

            if (false !== $responseJson) {
                try {
                    $response = json_decode($responseJson);
                    if ($response->success === true) {
                        $this->apiResponse[$organization->source] = $response;
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

