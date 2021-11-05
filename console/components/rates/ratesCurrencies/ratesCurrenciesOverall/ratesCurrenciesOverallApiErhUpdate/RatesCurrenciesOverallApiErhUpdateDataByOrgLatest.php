<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate;

/**
 * Выбираем из таблицы rates_currencies_overall для каждой организации последнюю запись.
 * API https://api.exchangerate.host/2020-01-01?base=USD&source=cbr
 * Class RatesCurrenciesOverallApiErhUpdateDataByOrgLatest
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate
 */
class RatesCurrenciesOverallApiErhUpdateDataByOrgLatest
{

    /**
     * Конфигурации данного API
     * @var \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    public $configs;

    /**
     * Список организаций данного API
     * @var \console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId
     */
    public $apiErhOrganizations;

    /**
     * Список организаций с последней записью из rates_currencies_overall для каждой организации
     * @var array
     */
    public $latest  = array();

    /**
     * Отправляем в лог обнаружили ли мы данные в таблице или не обнаружили
     * @var int
     */
    public $logDbEmpty = 0;


    /**
     * RatesCurrenciesOverallApiErhUpdateDateLatest constructor.
     * @param $configs \console\components\rates\ratesConfigs\RatesConfigsErh
     * @param $apiErhOrganizations \console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId
     */
    function __construct($configs, $apiErhOrganizations)
    {

        /**
         * @todo
         * $this->latest
         * Выбрать из таблицы rates_currencies_overall для каждой организации последнюю запись.
         *
         * Если данных нет то записываем лог переменную logDbEmpty как 1
         *    Если logDbEmpty = 1 то все действия в последующих класса пропускаем
         *    В логе для этой переменной logDbEmpty message:
         *    "Прежде чем использовать данную комманду необходмо изначально заполнить таблицу
         *    rates_currencies_overall всеми курсами для этого API"
         */
    }
}

