<?php

namespace console\components\rates\ratesOrganizations;


use console\models\rates\RatesOrganizations;

/**
 * Выборка всех организаций относящихся к данному API
 * Class RatesOrganizationsDataByApiId
 * @package console\components\rates\ratesOrganizations
 */
class RatesOrganizationsDataByApiId
{

    /**
     * Список организаций
     * @var array|\console\models\rates\RatesOrganizations[]|\yii\db\ActiveRecord[]
     */
    public $organizations;

    function __construct($apiId)
    {
        $this->organizations =
            RatesOrganizations::find()
                ->where(['api_id' => $apiId])
                ->all();
    }

}

