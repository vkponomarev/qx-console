<?php

namespace console\models\rates;

use Yii;

/**
 * This is the model class for table "rates_currencies_latest".
 *
 * @property int $id
 * @property int|null $api_id
 * @property int|null $rates_organizations_id
 * @property string $rates_organizations_source
 * @property string $base
 * @property string $currency
 * @property float|null $value
 * @property string|null $date_time
 * @property string $token
 */
class RatesCurrenciesLatest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rates_currencies_latest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['api_id', 'rates_organizations_id'], 'integer'],
            [['rates_organizations_source', 'base', 'currency', 'token'], 'required'],
            [['value'], 'number'],
            [['date_time'], 'safe'],
            [['rates_organizations_source', 'base', 'currency', 'token'], 'string', 'max' => 255],
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
            'currency' => 'Currency',
            'value' => 'Value',
            'date_time' => 'Date Time',
            'token' => 'Token',
        ];
    }
}
