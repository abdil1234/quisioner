<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_lingkungan".
 *
 * @property int $id
 * @property string $lingkungan
 */
class RefLingkungan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_lingkungan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lingkungan'], 'required'],
            [['lingkungan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lingkungan' => 'Lingkungan',
        ];
    }
}
