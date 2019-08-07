<?php

use yii\db\Migration;

/**
 * Class m190807_031911_ref_lingkungan
 */
class m190807_031911_ref_lingkungan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ref_lingkungan}}', [
            'id' => $this->primaryKey(),
            'lingkungan' => $this->string(30)->notNull()
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190807_031911_ref_lingkungan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190807_031911_ref_lingkungan cannot be reverted.\n";

        return false;
    }
    */
}
