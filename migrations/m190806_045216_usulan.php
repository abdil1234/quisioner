<?php

use yii\db\Migration;

/**
 * Class m190806_045216_usulan
 */
class m190806_045216_usulan extends Migration
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

        $this->createTable('{{%usulan}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(30)->notNull(),
            'jenis_kelamin' => $this->string(10),
            'tgl_lahir' => $this->date(),
            'alamat' => $this->text(),
            'kritik' => $this->text(),
            'saran' => $this->text(),
            'waktu' => $this->date(),
            'file_id' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%usulan}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190806_045216_usulan cannot be reverted.\n";

        return false;
    }
    */
}
