<?php

namespace console\components\rates\ratesOrganizations\ratesOrganizationsApiErh;

use console\models\rates\RatesOrganizations;

/**
 * Вставка органицаций из API https://api.exchangerate.host/sources в таблицу rates_organizations
 * Если таблица до этого не содержала оганизаций из этого API
 * Class RatesOrganizationsApiErhCheckEmpty
 * @package console\components\rates\ratesOrganizations\ratesOrganizationsApiErh
 */
class RatesOrganizationsApiErhInsert
{

    /**
     * Результат чтения API
     * @var \console\components\rates\ratesOrganizations\ratesOrganizationsApiErh\RatesOrganizationsApiErhRead
     */
    public $apiErhRead;

    /**
     * RatesOrganizationsApiErhInsert constructor.
     * @param $apiErhRead \console\components\rates\ratesOrganizations\ratesOrganizationsApiErh\RatesOrganizationsApiErhRead
     * @throws \Exception
     */
    function __construct($apiErhRead)
    {
        $this->apiErhRead = $apiErhRead;
        if ($this->apiErhRead->apiResponse){
            foreach ($this->apiErhRead->apiResponse->sources as $source) {
                $model = new RatesOrganizations();
                $model->api_id = 1;
                $model->name = $source->name;
                $model->description = $source->description;
                $model->source = $source->source;
                $model->source_url = $source->source_url;
                $model->available_from_date = $source->available_from_date;
                $model->update_at = (new \DateTime('now'))->format('Y-m-d H:i:s');
                $model->create_at = (new \DateTime('now'))->format('Y-m-d H:i:s');
                $model->save();
            }
        }
    }
}

