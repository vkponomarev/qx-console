<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert;


/**
 * Читаем данные из API
 * https://api.exchangerate.host/timeseries?base=USD&source=crypto&start_date=2020-01-01&end_date=2020-01-04'
 * Class RatesCryptoOverallApiErhInsertRead
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert
 */
class RatesCryptoOverallApiErhInsertRead
{

    /**
     * Конфигурации текущего API
     * @var \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    public $configs;

    /**
     * Массив ответ API курсов криптовалют по всем диапазонам дат
     * @var array
     */
    public $apiResponse = array();

    /**
     * Есил возникла ошибка в try catch записываем ее сюда
     * @var
     */
    public $logErrorApiException = 0;

    /**
     * Если произошла ошибка чтения ссылки API ошибку ставим 1
     * @var int
     */
    public $logErrorApiAccess = 0;


    /**
     * RatesCurrenciesOverallApiErhInsertRead constructor.
     * @param $config \console\components\rates\ratesConfigs\RatesConfigsErh
     * @param $sleepTimeSeconds int время простоя в секундах при множественной обработке API
     * @param $organizationsRanges \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertDateRanges
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

