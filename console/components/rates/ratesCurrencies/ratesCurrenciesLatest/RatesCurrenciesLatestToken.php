<?php

namespace console\components\rates\ratesCurrencies\ratesCurrenciesLatest;


/**
 * Содание токена
 * Необходимо для удаления старых данных после того как будут внесены новые данные
 * Чтобы можно было отличить новые данные от старых
 * Class RatesCurrenciesLatestToken
 * @package console\components\rates\ratesCurrencies\ratesCurrenciesLatest
 */
class RatesCurrenciesLatestToken
{

    public $token;

    function __construct()
    {
        $this->token = md5(microtime() . 'salt' . time());
    }

}

