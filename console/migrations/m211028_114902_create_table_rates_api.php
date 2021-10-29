<?php

use yii\db\Migration;

/**
 * Class m211028_114902_create_table_rates_api
 */
class m211028_114902_create_table_rates_api extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rates_api', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'url' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),

        ]);

        $this->insert('rates_api', [
            'name' => 'API https://exchangerate.host/',
            'url' => 'https://exchangerate.host/',
            'description' => 'https://exchangerate.host/ Api курсов валют',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211028_114902_create_table_rates_api cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211028_114902_create_table_rates_api cannot be reverted.\n";

        return false;
    }
    */
}
