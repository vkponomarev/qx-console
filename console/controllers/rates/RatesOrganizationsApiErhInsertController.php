<?php

namespace console\controllers\rates;


use console\components\rates\ratesConfigs\RatesConfigs;
use console\components\rates\ratesOrganizations\ratesOrganizationsApiErh\RatesOrganizationsApiErhCheckEmpty;
use console\components\rates\ratesOrganizations\ratesOrganizationsApiErh\RatesOrganizationsApiErhInsert;
use console\components\rates\ratesOrganizations\ratesOrganizationsApiErh\RatesOrganizationsApiErhLogs;
use console\components\rates\ratesOrganizations\ratesOrganizationsApiErh\RatesOrganizationsApiErhRead;

/**
 * Изначальное заполнение таблицы rates_organizations организациями из API https://api.exchangerate.host/sources
 * Class RatesOrganizationsApiErhAddController
 * @package console\controllers\rates
 */
class RatesOrganizationsApiErhInsertController extends \yii\console\Controller
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
        new RatesOrganizationsApiErhLogs(
            new RatesOrganizationsApiErhInsert(
                new RatesOrganizationsApiErhRead(
                    new RatesOrganizationsApiErhCheckEmpty(),
                    $this->config = (new RatesConfigs())->erh)));
    }
}

