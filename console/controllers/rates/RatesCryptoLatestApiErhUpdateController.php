<?php

namespace console\controllers\rates;


use console\components\rates\ratesConfigs\RatesConfigs;
use console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErh\RatesCryptoLatestApiErhDelete;
use console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErh\RatesCryptoLatestApiErhInsert;
use console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErh\RatesCryptoLatestApiErhLogs;
use console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErh\RatesCryptoLatestApiErhRead;
use console\components\rates\ratesCrypto\ratesCryptoLatest\RatesCryptoLatestToken;

/**
 * Обновление последних курсов криптовалют из API https://api.exchangerate.host/latest?base=USD&source=crypto
 * Class RatesOrganizationsApiErhAddController
 * @package console\controllers\rates
 */
class RatesCryptoLatestApiErhUpdateController extends \yii\console\Controller
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
        new RatesCryptoLatestApiErhLogs(
            new RatesCryptoLatestApiErhDelete(
                new RatesCryptoLatestApiErhInsert(
                    new RatesCryptoLatestApiErhRead(
                        $this->config = (new RatesConfigs())->erh),
                    new RatesCryptoLatestToken()
                )
            )
        );
    }
}

