<?php

use yii\db\Migration;

/**
 * Class m211101_130911_create_table_rates_crypto_overall
 */
class m211101_130911_create_table_rates_crypto_overall extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rates_crypto_overall', [
            'id' => $this->primaryKey(),
            'api_id' => $this->integer(11)->defaultValue(0),
            'rates_organizations_id' => $this->integer(11)->defaultValue(0),
            'rates_organizations_source' => $this->string(255)->notNull(),
            'base' => $this->string(255)->notNull(),
            'crypto' => $this->string(255)->notNull(),
            'value' => $this->float(),
            'date_time' => $this->dateTime(),
            'token' => $this->string(255)->notNull(),
        ]);

        $this->createIndex(
            'idx-rates_crypto_overall-api_id',
            'rates_crypto_overall',
            'api_id'
        );
        $this->createIndex(
            'idx-rates_crypto_overall-rates_organizations_id',
            'rates_crypto_overall',
            'rates_organizations_id'
        );
        $this->createIndex(
            'idx-rates_crypto_overall-rates_organizations_source',
            'rates_crypto_overall',
            'rates_organizations_source'
        );
        $this->createIndex(
            'idx-rates_crypto_overall-base',
            'rates_crypto_overall',
            'base'
        );
        $this->createIndex(
            'idx-rates_crypto_overall-crypto',
            'rates_crypto_overall',
            'crypto'
        );
        $this->createIndex(
            'idx-rates_crypto_overall-date_time',
            'rates_crypto_overall',
            'date_time'
        );
        $this->createIndex(
            'idx-rates_crypto_overall-token',
            'rates_crypto_overall',
            'token'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211101_130911_create_table_rates_crypto_overall cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211101_130911_create_table_rates_crypto_overall cannot be reverted.\n";

        return false;
    }
    */
}
