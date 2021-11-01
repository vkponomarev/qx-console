<?php

namespace console\controllers\rates;


use console\components\rates\ratesConfigs\RatesConfigs;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhDelete;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhInsert;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhLogs;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhRead;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErhUpdate\RatesCurrenciesLatestApiErhUpdateDelete;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErhUpdate\RatesCurrenciesLatestApiErhUpdateInsert;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErhUpdate\RatesCurrenciesLatestApiErhUpdateLogs;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErhUpdate\RatesCurrenciesLatestApiErhUpdateRead;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\RatesCurrenciesLatestToken;
use console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId;

/**
 * Обновление последних курсов валют из API https://api.exchangerate.host/latest?base=USD
 * Class RatesOrganizationsApiErhAddController
 * @package console\controllers\rates
 */
class RatesCurrenciesLatestApiErhUpdateController extends \yii\console\Controller
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
        new RatesCurrenciesLatestApiErhUpdateLogs(
            new RatesCurrenciesLatestApiErhUpdateDelete(
                new RatesCurrenciesLatestApiErhUpdateInsert(
                    new RatesCurrenciesLatestApiErhUpdateRead(
                        $this->config = (new RatesConfigs())->erh,
                        new RatesOrganizationsDataByApiId($this->config->apiId),
                        $sleepTimeSeconds = 1),
                    new RatesCurrenciesLatestToken()
                )
            )
        );
    }
}

