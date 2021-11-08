<?php

namespace console\controllers\rates;


use console\components\rates\ratesConfigs\RatesConfigs;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertDateRanges;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertDelete;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertInsert;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertLogs;
use console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert\RatesCryptoOverallApiErhInsertRead;
use console\components\rates\ratesCrypto\ratesCryptoOverall\RatesCryptoOverallToken;
use console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId;

/**
 * Изначальное заполнение таблицы rates_crypto_overall все курсы криптовалют по всем доступным датам
 * API https://api.exchangerate.host/timeseries?base=USD&source=cbrstart_date=2020-01-01&end_date=2020-01-04
 * Class RatesCryptoOverallApiErhInsertController
 * @package console\controllers\rates
 */
class RatesCryptoOverallApiErhInsertController extends \yii\console\Controller
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
        $this->config = (new RatesConfigs())->erh;
        new RatesCryptoOverallApiErhInsertLogs(
            new RatesCryptoOverallApiErhInsertDelete(
                new RatesCryptoOverallApiErhInsertInsert(
                    new RatesCryptoOverallApiErhInsertRead(
                        $this->config,
                        $sleepTimeSeconds = 1,
                        new RatesCryptoOverallApiErhInsertDateRanges(new RatesOrganizationsDataByApiId($this->config->apiId))
                    ),
                    new RatesCryptoOverallToken()
                )
            )
        );
    }
}

