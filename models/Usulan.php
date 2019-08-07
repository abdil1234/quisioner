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
 * @property int $kd_lingkungan
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

    public function behaviors()
    {
        return [
            [
                'class' => 'mdm\upload\UploadBehavior',
                'attribute' => 'file', // required, use to receive input file
                'savedAttribute' => 'file_id', // optional, use to link model with saved file.
                'autoSave' => true, // when true then uploaded file will be save before ActiveRecord::save()
                'autoDelete' => true, // when true then uploaded file will deleted before ActiveRecord::delete()
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'kd_lingkungan'], 'required'],
            [['tgl_lahir', 'waktu'], 'safe'],
            [['alamat', 'kritik', 'saran'], 'string'],
            [['file_id', 'kd_lingkungan'], 'integer'],
            [['nama'], 'string', 'max' => 30],
            [['jenis_kelamin'], 'string', 'max' => 10],
            [['file'], 'file', 'extensions' => 'jpg, jpeg, png, pdf','maxSize' => 5120000, 'tooBig' => 'Maksimal 5MB'],

        ];
    }

    public function getLingkungan()
    {
        return $this->hasOne(RefLingkungan::className(), ['id' => 'kd_lingkungan']);
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
            'kd_lingkungan' => 'Kd Lingkungan',
        ];
    }
}
