<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert;


/**
 * Читаем данные из API
 * https://api.exchangerate.host/timeseries?base=USD&source=cbr&start_date=2020-01-01&end_date=2020-01-04'
 * Class RatesCurrenciesOverallApiErhInsertRead
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert
 */
class RatesCurrenciesOverallApiErhInsertRead
{


    /**
     * Организации данного API со списком диапазонов дат
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertDateRanges
     */
    public $organizationsRanges;

    /**
     * Конфигурации текущего API
     * @var \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    public $config;
    /**
     * Массив ответ API курсов валют для всех организаций со всеми диапазонами дат
     * @var array
     */
    public $apiResponse = array();

    /**
     * RatesCurrenciesOverallApiErhInsertRead constructor.
     * @param $config \console\components\rates\ratesConfigs\RatesConfigsErh
     * @param $sleepTimeSeconds int время простоя в секундах при множественной обработке API
     * @param $organizationsRanges \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertDateRanges
     */
    function __construct($config, $sleepTimeSeconds, $organizationsRanges)
    {
        $this->config = $config;
        $this->organizationsRanges = $organizationsRanges;
        foreach ($this->organizationsRanges->organizationsRanges as $source => $organization) {

            foreach ($organization as $organizationRange) {
                sleep($sleepTimeSeconds);

                /**
                 * $this->config->currenciesOverallApi =
                 * https://api.exchangerate.host/timeseries?base=USD
                 */
                $apiUrl =
                    ($source <> 'forex') ?
                        $this->config->currenciesOverallApi .
                        '&source=' . $source .
                        '&start_date=' . $organizationRange[0] .
                        '&end_date=' . $organizationRange[1] :
                        $this->config->currenciesOverallApi .
                        '&start_date=' . $organizationRange[0] .
                        '&end_date=' . $organizationRange[1];

                $responseJson = @file_get_contents($apiUrl);
                if (false !== $responseJson) {
                    try {
                        $response = json_decode($responseJson);
                        if ($response->success === true) {
                            $this->apiResponse[$source][] = $response;
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
}

