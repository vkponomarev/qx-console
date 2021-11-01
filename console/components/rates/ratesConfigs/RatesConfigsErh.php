<?php

namespace console\components\rates\ratesConfigs;


/**
 * Конфигурации для API курсов валют https://exchangerate.host/
 * Class RatesConfigsErh
 * @package console\components\rates\ratesConfigs
 */
class RatesConfigsErh
{
    /**
     * Ссылка на список организаций для которых есть курсы валют
     * @var string
     */
    public $organizationsApi;

    /**
     * Ссылка на последние обновленные данные курсов валют
     * @var string
     */
    public $currenciesLatestApi;

    /**
     * Ссылка на последние обновленные данные курсов криптовалют
     * @var string
     */
    public $cryptoLatestApi;

    /**
     * Ссылка на последние обновленные данные курсов криптовалют
     * @var string
     */
    public $currenciesOverallApi;

    /**
     * ID данного API
     * @var int
     */
    public $apiId;

    function __construct()
    {
        $this->apiId = 1;
        $this->organizationsApi = 'https://api.exchangerate.host/sources';
        $this->currenciesLatestApi = 'https://api.exchangerate.host/latest?base=USD';

        //currenciesOverallApi ?source=ecb&start_date=2020-01-01&end_date=2020-01-04
        $this->currenciesOverallApi = 'https://api.exchangerate.host/timeseries?base=USD';

        $this->cryptoLatestApi = 'https://api.exchangerate.host/latest?base=USD&source=crypto';
    }

}














