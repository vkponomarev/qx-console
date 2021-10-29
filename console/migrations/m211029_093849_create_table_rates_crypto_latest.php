<?php

use yii\db\Migration;

/**
 * Class m211029_093849_create_table_rates_crypto_latest
 */
class m211029_093849_create_table_rates_crypto_latest extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('rates_crypto_latest', [
            'id' => $this->primaryKey(),
            'api_id' => $this->integer(11)->defaultValue(0),
            'rates_organizations_id' => $this->integer(11)->defaultValue(0),
            'rates_organizations_source' => $this->string(255)->defaultValue(''),
            'base' => $this->string(255)->notNull(),
            'crypto' => $this->string(255)->notNull(),
            'value' => $this->float(),
            'date_time' => $this->dateTime(),
            'token' => $this->string(255)->notNull(),
        ]);

        $this->createIndex(
            'idx-rates_crypto_latest-api_id',
            'rates_crypto_latest',
            'api_id'
        );
        $this->createIndex(
            'idx-rates_crypto_latest-rates_organizations_id',
            'rates_crypto_latest',
            'rates_organizations_id'
        );
        $this->createIndex(
            'idx-rates_crypto_latest-rates_organizations_source',
            'rates_crypto_latest',
            'rates_organizations_source'
        );
        $this->createIndex(
            'idx-rates_crypto_latest-base',
            'rates_crypto_latest',
            'base'
        );
        $this->createIndex(
            'idx-rates_crypto_latest-crypto',
            'rates_crypto_latest',
            'crypto'
        );
        $this->createIndex(
            'idx-rates_crypto_latest-date_time',
            'rates_crypto_latest',
            'date_time'
        );
        $this->createIndex(
            'idx-rates_crypto_latest-token',
            'rates_crypto_latest',
            'token'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211029_093849_create_table_rates_crypto_latest cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211029_093849_create_table_rates_crypto_latest cannot be reverted.\n";

        return false;
    }
    */
}
