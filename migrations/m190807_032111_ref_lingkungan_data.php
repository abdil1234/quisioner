<?php

use yii\db\Migration;

/**
 * Class m190807_032111_ref_lingkungan_data
 */
class m190807_032111_ref_lingkungan_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert(
            'ref_lingkungan', 
            [
                'lingkungan'
            ], 
            [
                ['Lingkungan 1'],
                ['Lingkungan 2'],
                ['Lingkungan 3'],
                ['Lingkungan 4'],
                ['Lingkungan 5']
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190807_032111_ref_lingkungan_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190807_032111_ref_lingkungan_data cannot be reverted.\n";

        return false;
    }
    */
}
