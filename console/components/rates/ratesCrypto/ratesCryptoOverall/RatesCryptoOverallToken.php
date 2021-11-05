<?php

namespace console\components\rates\ratesCrypto\ratesCryptoOverall;


/**
 * Содание токена
 * Необходимо для удаления старых данных после того как будут внесены новые данные
 * Чтобы можно было отличить новые данные от старых
 * Class RatesCryptoOverallToken
 * @package console\components\rates\ratesCrypto\ratesCryptoOverall
 */
class RatesCryptoOverallToken
{

    public $token;

    function __construct()
    {
        $this->token = md5(microtime() . 'salt' . time());
    }

}

