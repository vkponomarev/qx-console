<?php

namespace console\models\rates;

use Yii;

/**
 * This is the model class for table "rates_crypto_latest".
 *
 * @property int $id
 * @property int|null $api_id
 * @property int|null $rates_organizations_id
 * @property string|null $rates_organizations_source
 * @property string $base
 * @property string $crypto
 * @property float|null $value
 * @property string|null $date_time
 * @property string $token
 */
class RatesCryptoLatest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rates_crypto_latest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['api_id', 'rates_organizations_id'], 'integer'],
            [['base', 'crypto', 'token'], 'required'],
            [['value'], 'number'],
            [['date_time'], 'safe'],
            [['rates_organizations_source', 'base', 'crypto', 'token'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'api_id' => 'Api ID',
            'rates_organizations_id' => 'Rates Organizations ID',
            'rates_organizations_source' => 'Rates Organizations Source',
            'base' => 'Base',
            'crypto' => 'Crypto',
            'value' => 'Value',
            'date_time' => 'Date Time',
            'token' => 'Token',
        ];
    }
}
