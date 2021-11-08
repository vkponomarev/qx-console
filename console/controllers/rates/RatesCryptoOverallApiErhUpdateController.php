<?php

namespace console\controllers\rates;


use console\components\rates\ratesConfigs\RatesConfigs;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateDataLatest;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateDateRanges;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateInsert;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateLogs;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateRead;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateDataByOrgLatest;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateDateRanges;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateInsert;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateLogs;
use console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateRead;
use console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId;

/**
 * Обновление таблицы rates_crypto_overall.
 * Внесение данных за те даты которые не обнаружены в таблице
 * API https://api.exchangerate.host/2020-01-01?base=USD&source=crypto
 * Class RatesCryptoOverallApiErhUpdateController
 * @package console\controllers\rates
 */
class RatesCryptoOverallApiErhUpdateController extends \yii\console\Controller
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
        new RatesCryptoOverallApiErhUpdateLogs(
            new RatesCryptoOverallApiErhUpdateInsert(
                new RatesCryptoOverallApiErhUpdateRead(
                    $this->configs = (new RatesConfigs())->erh,
                    $sleepTimeSeconds = 1,
                    new RatesCryptoOverallApiErhUpdateDateRanges(
                        new RatesCryptoOverallApiErhUpdateDataLatest(
                            $this->configs
                        )
                    )
                )
            )
        );
    }
}

