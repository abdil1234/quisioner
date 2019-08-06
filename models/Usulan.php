<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usulan".
 *
 * @property int $id
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $kritik
 * @property string $saran
 * @property string $waktu
 * @property int $file_id
 */
class Usulan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usulan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['tgl_lahir', 'waktu'], 'safe'],
            [['alamat', 'kritik', 'saran'], 'string'],
            [['file_id'], 'integer'],
            [['nama'], 'string', 'max' => 30],
            [['jenis_kelamin'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tgl_lahir' => 'Tgl Lahir',
            'alamat' => 'Alamat',
            'kritik' => 'Kritik',
            'saran' => 'Saran',
            'waktu' => 'Waktu',
            'file_id' => 'File ID',
        ];
    }
}
