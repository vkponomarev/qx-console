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
    public $currenciesOverallApi;

    /**
     * Ссылка на последние обновленные данные курсов криптовалют
     * @var string
     */
    public $cryptoLatestApi;

    /**
     * Ссылка на последние обновленные данные курсов криптовалют
     * @var string
     */
    public $cryptoOverallApi;

    /**
     * Дата начала предоставления курсов криптовалют для данного API
     * @var string
     */
    public $cryptoOverallApiDateRangeStart;

    /**
     * Ссылка курсы криптовалют на конкретную дату
     * @var string
     */
    public $cryptoHistoricalApi;

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
        //cryptoHistoricalApi https://api.exchangerate.host/2020-04-04?source=cbr
        $this->currenciesHistoricalApi = 'https://api.exchangerate.host/';

        $this->cryptoLatestApi = 'https://api.exchangerate.host/latest?base=USD&source=crypto';
        //cryptoOverallApi &start_date=2020-01-01&end_date=2020-01-04
        $this->cryptoOverallApi = 'https://api.exchangerate.host/timeseries?base=USD&source=crypto';

        //cryptoHistoricalApi https://api.exchangerate.host/2020-04-04?source=crypto
        $this->cryptoHistoricalApi = 'https://api.exchangerate.host/';

        $this->cryptoOverallApiDateRangeStart = '2020-05-07';


    }

}














