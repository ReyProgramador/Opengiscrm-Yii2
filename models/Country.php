<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "countrys".
 *
 * @property int $id_country
 * @property string $country
 * @property float $lat
 * @property float $long
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'countrys';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'lat', 'long'], 'required'],
            [['lat', 'long'], 'number'],
            [['country'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_country' => 'Id Country',
            'country' => 'Country',
            'lat' => 'Lat',
            'long' => 'Long',
        ];
    }
}
