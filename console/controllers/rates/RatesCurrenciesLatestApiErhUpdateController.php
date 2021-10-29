<?php

namespace console\controllers\rates;


use console\components\rates\ratesConfigs\RatesConfigs;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhDelete;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhInsert;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhLogs;
use console\components\rates\ratesCurrencies\ratesCurrenciesLatest\ratesCurrenciesLatestApiErh\RatesCurrenciesLatestApiErhRead;
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
        new RatesCurrenciesLatestApiErhLogs(
            new RatesCurrenciesLatestApiErhDelete(
                new RatesCurrenciesLatestApiErhInsert(
                    new RatesCurrenciesLatestApiErhRead(
                        $this->config = (new RatesConfigs())->erh,
                        new RatesOrganizationsDataByApiId($this->config->apiId)),
                    new RatesCurrenciesLatestToken()
                )
            ));
    }
}

