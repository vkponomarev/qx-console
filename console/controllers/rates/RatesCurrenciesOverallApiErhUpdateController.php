<?php

namespace console\controllers\rates;


use console\components\rates\ratesConfigs\RatesConfigs;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateDataByOrgLatest;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateDateRanges;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateInsert;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateLogs;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateRead;
use console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId;

/**
 * Обновление таблицы rates_currencies_overall.
 * Внесение данных за те даты которые не обнаружены в таблице rates_currencies_overall
 * API https://api.exchangerate.host/2020-01-01?base=USD&source=cbr
 * Class RatesCryptoOverallApiErhUpdateController
 * @package console\controllers\rates
 */
class RatesCurrenciesOverallApiErhUpdateController extends \yii\console\Controller
{
    /**
     * @var RatesConfigs
     */
    public $configs;

    /**
     * @throws \Exception
     */
    public function actionIndex()
    {
        new RatesCurrenciesOverallApiErhUpdateLogs(
            new RatesCurrenciesOverallApiErhUpdateInsert(
                new RatesCurrenciesOverallApiErhUpdateRead(
                    $this->configs = (new RatesConfigs())->erh,
                    $sleepTimeSeconds = 1,
                    new RatesCurrenciesOverallApiErhUpdateDateRanges(
                        new RatesCurrenciesOverallApiErhUpdateDataByOrgLatest(
                            $this->configs,
                            new RatesOrganizationsDataByApiId($this->configs->apiId)
                    )
                ))
            )
        );
    }
}

