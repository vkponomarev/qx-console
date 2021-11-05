<?php

namespace console\controllers\rates;


use console\components\rates\ratesConfigs\RatesConfigs;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateDataLatest;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateDateRanges;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateInsert;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateLogs;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateRead;

/**
 * Обновление таблицы rates_currencies_overall.
 * Внесение данных за те даты которые не обнаружены в таблице
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
        new RatesCryptoOverallApiErhUpdateLogs(
            new RatesCryptoOverallApiErhUpdateInsert(
                new RatesCryptoOverallApiErhUpdateRead(
                    $this->configs = (new RatesConfigs())->erh,
                    $sleepTimeSeconds = 1,
                    new RatesCryptoOverallApiErhUpdateDateRanges(
                        new RatesCryptoOverallApiErhUpdateDataLatest(
                            $this->configs
                    )
                ))
            )
        );
    }
}

