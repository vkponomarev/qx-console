<?php

namespace console\models\rates;

use Yii;

/**
 * This is the model class for table "rates_organizations".
 *
 * @property int $id
 * @property int|null $api_id
 * @property string|null $name
 * @property string $description
 * @property string $source
 * @property string $source_url
 * @property string|null $available_from_date
 * @property string|null $update_at
 * @property string|null $create_at
 */
class RatesOrganizations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rates_organizations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['api_id'], 'integer'],
            [['description', 'source', 'source_url'], 'required'],
            [['description'], 'string'],
            [['available_from_date', 'update_at', 'create_at'], 'safe'],
            [['name', 'source', 'source_url'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'description' => 'Description',
            'source' => 'Source',
            'source_url' => 'Source Url',
            'available_from_date' => 'Available From Date',
            'update_at' => 'Update At',
            'create_at' => 'Create At',
        ];
    }
}
