<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate;

/**
 * Создаем массив с диапазоном дат которые не внесены в таблицу rates_crypto_overall.
 * API https://api.exchangerate.host/2020-01-01?base=USD&source=cbr
 * Class RatesCryptoOverallApiErhUpdateDateRanges
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate
 */
class RatesCryptoOverallApiErhUpdateDateRanges
{

    /**
     * Массив заполненный диапазоном дат на которые нет данных в базе rates_crypto_overall
     * @var
     */
    public $dateRanges;

    /**
     * Результат выполнения класса
     * @var \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateDataLatest
     */
    public $apiErhOverallLatest;

    /**
     * Логируем если в таблице rates_crypto_overall актуальные данные и вность ничего не нужно
     * @var int
     */
    public $logDbActualData = 0;

    /**
     * RatesCryptoOverallApiErhUpdateDateRanges constructor.
     * @param $apiErhOverallLatest  \console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhUpdate\RatesCryptoOverallApiErhUpdateDataLatest
     */
    function __construct($apiErhOverallLatest)
    {
        /**
        $this->apiErhOverallLatest = $apiErhOverallLatest;
        $this->apiErhOverallLatest->configs;
        $this->apiErhOverallLatest->logDbEmpty;
        $this->apiErhOverallLatest->latest;
         */

        /**
         * @todo
         * По аналогии с RatesCurrenciesOverallApiErhUpdateDateRanges
         *
         * 1. Если $this->latest->logDbEmpty 0 то выполняем действия:
         *
         * 1.1 Выбираем дату последней записи из $this->apiErhOverallLatest->latest
         * 1.1.1 Если дата равна сегодняшней дате проверять по (Y-m-d) без времени
         * 1.1.1.1 установить $this->logDbActualData = 1 пропускаем остальные действия
         *
         * 1.1.2 Если дата не равна сегодняшней дате
         * 1.1.2.1 Создаем массив из всех диапазона всех дат от $this->apiErhOverallLatest->latest не включая до
         *          сегодняшней даты
         *
         * Итого у нас будет диапазон дат курсы криптовалют на которые нужно будет внести в таблицу
         *
         *
         */
    }
}

