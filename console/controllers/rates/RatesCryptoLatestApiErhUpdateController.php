<?php

namespace console\controllers\rates;


use console\components\rates\ratesConfigs\RatesConfigs;
use console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\RatesCryptoLatestApiErhUpdateDelete;
use console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\RatesCryptoLatestApiErhUpdateInsert;
use console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\RatesCryptoLatestApiErhUpdateLogs;
use console\components\rates\ratesCrypto\ratesCryptoLatest\ratesCryptoLatestApiErhUpdate\RatesCryptoLatestApiErhUpdateRead;
use console\components\rates\ratesCrypto\ratesCryptoLatest\RatesCryptoLatestToken;
use console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId;

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
        new RatesCryptoLatestApiErhUpdateLogs(
            new RatesCryptoLatestApiErhUpdateDelete(
                new RatesCryptoLatestApiErhUpdateInsert(
                    new RatesCryptoLatestApiErhUpdateRead(
                        $this->config = (new RatesConfigs())->erh),
                    new RatesCryptoLatestToken()
                )
            )
        );
    }
}

