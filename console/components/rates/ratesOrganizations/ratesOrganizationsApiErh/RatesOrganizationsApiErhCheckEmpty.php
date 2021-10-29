<?php

namespace console\components\rates\ratesOrganizations\ratesOrganizationsApiErh;

use console\models\rates\RatesOrganizations;

/**
 * Проверка Пустая ли таблица rates_organizations
 * Так как forex нет в списке организаций данного API, но forex используется как default
 * То при создании таблицы мы сами вписали forex из за этого такое условие.
 * Class RatesOrganizationsApiErhCheckEmpty
 * @package console\components\rates\ratesOrganizations\ratesOrganizationsApiErh
 */
class RatesOrganizationsApiErhCheckEmpty
{

    public $empty = 0;

    function __construct()
    {
        if (count(
            RatesOrganizations::find()
                ->where(['api_id' => 1])
                ->all()) == 1)
            $this->empty = 1;
    }

}

