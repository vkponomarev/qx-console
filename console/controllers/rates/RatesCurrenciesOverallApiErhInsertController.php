<?php

namespace console\controllers\rates;


use console\components\rates\ratesConfigs\RatesConfigs;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhLogs;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\RatesCurrenciesLatestToken;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertDateRanges;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertDelete;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertInsert;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertLogs;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhInsert\RatesCurrenciesOverallApiErhInsertRead;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\RatesCurrenciesOverallToken;
use console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId;

/**
 * Изначальное заполнение таблицы rates_currencies_overall все курсы валют по всем доступным датам
 * API https://api.exchangerate.host/timeseries?start_date=2020-01-01&end_date=2020-01-04
 * Class RatesCurrenciesOverallApiErhInsertController
 * @package console\controllers\rates
 */
class RatesCurrenciesOverallApiErhInsertController extends \yii\console\Controller
{
    /**
     * @var RatesConfigs
     */
    public $config;

    /**
     * @throws \Exception
     */
    public function actionIndex()
    {
        new RatesCurrenciesOverallApiErhInsertLogs(
            new RatesCurrenciesOverallApiErhInsertDelete(
                new RatesCurrenciesOverallApiErhInsertInsert(
                    new RatesCurrenciesOverallApiErhInsertRead(
                        $this->config = (new RatesConfigs())->erh,
                        $sleepTimeSeconds = 1,
                        new RatesCurrenciesOverallApiErhInsertDateRanges(
                            new RatesOrganizationsDataByApiId($this->config->apiId)
                        )
                    ),
                    new RatesCurrenciesOverallToken()
                )
            )
        );
    }
}

