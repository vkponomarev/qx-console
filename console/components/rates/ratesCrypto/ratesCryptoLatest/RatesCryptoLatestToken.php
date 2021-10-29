<?php

namespace console\components\rates\ratesCrypto\ratesCryptoLatest;


/**
 * Содание токена
 * Необходимо для удаления старых данных после того как будут внесены новые данные
 * Чтобы можно было отличить новые данные от старых
 * Class RatesCryptoLatestToken
 * @package console\components\rates\ratesCrypto\ratesCryptoLatest
 */
class RatesCryptoLatestToken
{

    public $token;

    function __construct()
    {
        $this->token = md5(microtime() . 'salt' . time());
    }

}

