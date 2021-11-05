<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate;

/**
 * Выбираем из таблицы rates_crypto_overall последнюю запись для данного API.
 * API https://api.exchangerate.host/2020-01-01?base=USD&source=cbr
 * Class RatesCryptoOverallApiErhUpdateDataLatest
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate
 */
class RatesCryptoOverallApiErhUpdateDataLatest
{

    /**
     * Конфигурации данного API
     * @var \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    public $configs;

    /**
     * Отправляем в лог обнаружили ли мы данные в таблице для этого API или не обнаружили
     * @var int
     */
    public $logDbEmpty = 0;

    /**
     * RatesCryptoOverallApiErhUpdateDateLatest constructor.
     * @param $configs \console\components\rates\ratesConfigs\RatesConfigsErh
     */
    function __construct($configs)
    {

        /**
         * @todo
         * Выбраем последнюю запись из rates_crypto_overall.
         *
         * Если данных нет то записываем лог переменную logDbEmpty как 1
         *    Если logDbEmpty = 1 то все действия в последующих класса пропускаем
         *    В логе для этой переменной logDbEmpty message:
         *    "Прежде чем использовать данную комманду необходмо изначально заполнить таблицу
         *    rates_crypto_overall всеми курсами для этого API"
         */
    }
}

