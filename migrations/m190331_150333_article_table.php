<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190331_150333_article_table
 */
class m190331_150333_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190331_150333_article_table cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('articles', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
        ]);
        echo "m190331_150333_article_table created.\n";
    }

    public function down()
    {
        // echo "m190331_150333_article_table cannot be reverted.\n";

        // return false;
        $this->dropTable('articles');
    }

}
