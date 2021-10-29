<?php

use yii\db\Migration;

/**
 * Class m211028_163430_create_table_rates_currencies_latest
 */
class m211028_163430_create_table_rates_currencies_latest extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('rates_currencies_latest', [
            'id' => $this->primaryKey(),
            'api_id' => $this->integer(11)->defaultValue(0),
            'rates_organizations_id' => $this->integer(11)->defaultValue(0),
            'rates_organizations_source' => $this->string(255)->notNull(),
            'base' => $this->string(255)->notNull(),
            'currency' => $this->string(255)->notNull(),
            'value' => $this->float(),
            'date_time' => $this->dateTime(),
            'token' => $this->string(255)->notNull(),
        ]);

        $this->createIndex(
            'idx-rates_currencies_latest-api_id',
            'rates_currencies_latest',
            'api_id'
        );
        $this->createIndex(
            'idx-rates_currencies_latest-rates_organizations_id',
            'rates_currencies_latest',
            'rates_organizations_id'
        );
        $this->createIndex(
            'idx-rates_currencies_latest-rates_organizations_source',
            'rates_currencies_latest',
            'rates_organizations_source'
        );
        $this->createIndex(
            'idx-rates_currencies_latest-base',
            'rates_currencies_latest',
            'base'
        );
        $this->createIndex(
            'idx-rates_currencies_latest-currency',
            'rates_currencies_latest',
            'currency'
        );
        $this->createIndex(
            'idx-rates_currencies_latest-date_time',
            'rates_currencies_latest',
            'date_time'
        );
        $this->createIndex(
            'idx-rates_currencies_latest-token',
            'rates_currencies_latest',
            'token'
        );



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211028_163430_create_table_rates_currencies_latest cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211028_163430_create_table_rates_currencies_latest cannot be reverted.\n";

        return false;
    }
    */
}
