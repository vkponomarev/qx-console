<?php

namespace console\models\rates;

use Yii;

/**
 * This is the model class for table "rates_logs".
 *
 * @property int $id
 * @property int|null $api_id
 * @property float|null $error
 * @property string $component
 * @property string $message
 * @property string|null $date_time
 */
class RatesLogs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rates_logs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['api_id'], 'integer'],
            [['error'], 'number'],
            [['component', 'message'], 'required'],
            [['date_time'], 'safe'],
            [['component', 'message'], 'string', 'max' => 255],
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
            'error' => 'Error',
            'component' => 'Component',
            'message' => 'Message',
            'date_time' => 'Date Time',
        ];
    }
}
