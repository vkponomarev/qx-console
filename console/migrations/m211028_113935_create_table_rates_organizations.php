<?php

use yii\db\Migration;

/**
 * Class m211028_113935_create_table_rates_organizations
 */
class m211028_113935_create_table_rates_organizations extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('rates_organizations', [
            'id' => $this->primaryKey(),
            'api_id' => $this->integer(11)->defaultValue(0),
            'name' => $this->string(255),
            'description' => $this->text()->notNull(),
            'source' => $this->string(255)->notNull(),
            'source_url' => $this->string(255)->notNull(),
            'available_from_date' => $this->date(),
            'update_at' => $this->dateTime(),
            'create_at' => $this->dateTime(),
        ]);

        $this->insert('rates_organizations', [
            'api_id' => 1,
            'name' => 'Forex',
            'description' => 'Forex',
            'source' => 'forex',
            'source_url' => 'forex',
            'available_from_date' => '1999-02-01',
            'update_at' => (new DateTime('now'))->format('Y-m-d H:i:s'),
            'create_at' => (new DateTime('now'))->format('Y-m-d H:i:s'),
        ]);


        $this->createIndex(
            'idx-rates_organizations-api_id',
            'rates_organizations',
            'api_id'
        );
        $this->createIndex(
            'idx-rates_organizations-name',
            'rates_organizations',
            'name'
        );
        $this->createIndex(
            'idx-rates_organizations-source',
            'rates_organizations',
            'source'
        );
        $this->createIndex(
            'idx-rates_organizations-available_from_date',
            'rates_organizations',
            'available_from_date'
        );
        $this->createIndex(
            'idx-rates_organizations-update_at',
            'rates_organizations',
            'update_at'
        );
        $this->createIndex(
            'idx-rates_organizations-create_at',
            'rates_organizations',
            'create_at'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211028_113935_create_table_rates_organizations cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211028_113935_create_table_rates_organizations cannot be reverted.\n";

        return false;
    }
    */
}
