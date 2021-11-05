<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate;

/**
 * Создаем массив организаций с диапазоном дат которые не внесены в таблицу rates_currencies_overall.
 * API https://api.exchangerate.host/2020-01-01?base=USD&source=cbr
 * Class RatesCurrenciesOverallApiErhUpdateDateRanges
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate
 */
class RatesCurrenciesOverallApiErhUpdateDateRanges
{

    /**
     * Массив заполненный организациями и датами курсов валют которых нет в таблице rates_currencies_overall
     * @var
     */
    public $dateRanges;

    /**
     * Результат выполнения класса
     * @var \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateDataByOrgLatest
     */
    public $apiErhOverallLatest;

    /**
     * Логируем если в таблице rates_currencies_overall актуальные данные и вность ничего не нужно
     * @var int
     */
    public $logDbActualData = 0;

    /**
     * RatesCurrenciesOverallApiErhUpdateDateRanges constructor.
     * @param $latest  \console\components\rates\ratesCurrencies\ratesCurrenciesOverall\ratesCurrenciesOverallApiErhUpdate\RatesCurrenciesOverallApiErhUpdateDataByOrgLatest
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
         * По аналогии с RatesCurrenciesOverallApiErhInsertDateRanges
         *
         * Если $this->latest->logDbEmpty 0 то выполняем действия:
         *
         *
         * 1. $this->latest->latest Проходим по списку организаций с последней записью
         *    из таблицы rates_currencies_overall;
         *
         *      1.1 Проверяем даты последней записи курсов (Y-m-d) без времени
         *          1.1.1 Если все даты равны сегодняшней дате то $this->logDbActualData 1
         *                Пропускаем все остальные классы и в лог при этой переменно сообщение:
         *                "Обновление остановлено rates_currencies_overall уже заполнена актуальными данными"
         *
         *         1.1.2 Если мы обнаружим дату которая не равноа сегодняшней дате то:
         *              1.1.2.1 Создаем цикл в котором проходим по всем датам между этими датами
         *              1.1.2.2 Заполняем $this->dateRanges [source организации] [каждая дата в отдельности]
         *                      Заполняем организациями и у каждой ораганизации свой массив из всех дат
         *                      которые находятся между этими датами включая последнюю дату и
         *                      Исключая первую дату
         *
         */
    }
}

