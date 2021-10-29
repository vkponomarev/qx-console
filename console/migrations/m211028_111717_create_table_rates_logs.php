<?php

use yii\db\Migration;

/**
 * Class m211028_111717_create_table_rates_logs
 */
class m211028_111717_create_table_rates_logs extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rates_logs', [
            'id' => $this->primaryKey(),
            'api_id' => $this->integer(11)->defaultValue(0),
            'error' => $this->double()->defaultValue(0),
            'component' => $this->string(255)->notNull(),
            'message' => $this->string(255)->notNull(),
            'date_time' => $this->dateTime(),
        ]);

        $this->createIndex(
            'idx-rates_logs-api_id',
            'rates_logs',
            'api_id'
        );
        $this->createIndex(
            'idx-rates_logs-error',
            'rates_logs',
            'error'
        );
        $this->createIndex(
            'idx-rates_logs-component',
            'rates_logs',
            'component'
        );
        $this->createIndex(
            'idx-rates_logs-date_time',
            'rates_logs',
            'date_time'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        echo "m211028_111717_create_table_rates_logs cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211028_111717_create_table_rates_logs cannot be reverted.\n";

        return false;
    }
    */
}
