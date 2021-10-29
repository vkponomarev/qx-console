<?php

namespace console\models\rates;

use Yii;

/**
 * This is the model class for table "rates_api".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $description
 */
class RatesApi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rates_api';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url', 'description'], 'required'],
            [['description'], 'string'],
            [['name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            'description' => 'Description',
        ];
    }
}
