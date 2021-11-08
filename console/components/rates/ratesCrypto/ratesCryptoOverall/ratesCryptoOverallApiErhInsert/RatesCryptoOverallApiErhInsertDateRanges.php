<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert;

/**
 * Создаем массив с диапазоном дат для каждой органиции. для API
 * https://api.exchangerate.host/timeseries?start_date=2020-01-01&end_date=2020-01-04'
 * Class RatesCryptoOverallApiErhInsertDateRanges
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall\ratesCryptoOverallApiErhInsert
 */
class RatesCryptoOverallApiErhInsertDateRanges
{

    /**
     * Список диапазонов дат для каждой органицации данного API
     * @var array
     */
    public $cryptoRanges = array();

    /**
     * Список организаций данного API
     * @var \console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId
     */
    public $organizations;

    /**
     * Список диапазонов дат для каждой органицации данного API
     * @var array
     */
    public $organizationsRanges = array();

    /**
     * RatesCurrenciesOverallApiErhInsertDateRanges constructor.
     * @param $organizations \console\components\rates\ratesOrganizations\RatesOrganizationsDataByApiId
     * @throws \Exception
     */
    function __construct($organizations)
    {
        /**
         * @todo
         * По аналогии с RatesCurrenciesOverallApiErhInsertDateRanges
         * Необходимо поделить диапазон дат от $configs->cryptoOverallApiDateRangeStart до сегодня
         * на отрезки не более 365 дней.
         * Поскольу 365 дней это лимит данного API для выборки курсов по диапазону дат.
         *
         * Здесь без орагнизаций, работа только с данным отрезком
         *
         */
            /**
             * Необходимо поделить диапазон от $organization->available_from_date до сегодня
             * на отрезки не более 366 дней
             */
            //$availableDate = new \DateTime($organization->available_from_date);
            $dateNow = new \DateTime('now');
            //print_r($availableDate->format('Y-m-d') . "\r\n");
            //print_r($dateNow->format('Y-m-d') . "\r\n");

            $dateEach365 = new \DateTime('1999-01-01');

            $eachRange = 0;

            /**
             * Здесь мы каждый цикл прибавляем к стартовой дате
             * (дата начала доступности курсов валют для конкретной орагизации)
             * 356 дней.
             * Для того чтобы разделить имеющиця промежуток времени по длинне не более 356 дней.
             * (Ограничение для данного API https://api.exchangerate.host/timeseries?start_date=2020-01-01&end_date=2020-01-04'
             * В итоге будем иметь массив организаций со списком промежутков дат.
             */
            do {
                $eachRange++;

                if ($eachRange > 1)
                    $rangeOne = (new \DateTime($dateEach365->format('Y-m-d')))->modify('+1 day');
                else
                    $rangeOne = new \DateTime($dateEach365->format('Y-m-d'));

                $dateEach365->modify('+365 days');

                if ($dateNow->format('Y-m-d') >= $dateEach365->format('Y-m-d')) {
                    $rangeTwo = new \DateTime($dateEach365->format('Y-m-d'));
                } else {
                    $rangeTwo = new \DateTime($dateNow->format('Y-m-d'));
                }

                $this->organizationsRanges['crypto'][$eachRange] = [
                    $rangeOne->format('Y-m-d'),
                    $rangeTwo->format('Y-m-d')];

            } while ($dateNow->format('Y-m-d') >= $dateEach365->format('Y-m-d'));
    }
}

