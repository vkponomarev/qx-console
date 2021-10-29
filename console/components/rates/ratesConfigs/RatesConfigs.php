<?php

namespace console\components\rates\ratesConfigs;


/**
 * Конфигурации приложения
 * Class RatesConfigs
 * @package console\components\rates\ratesConfigs
 */
class RatesConfigs
{

    /**
     * Конфигурации для API https://exchangerate.host/
     * @var \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    public $erh;

    function __construct()
    {
        $this->erh = new RatesConfigsErh();
    }

}














