<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_leads".
 *
 * @property int $id_user_lead
 * @property int $id_user
 * @property int $id_lead
 */
class UserLead extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_leads';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_lead'], 'required'],
            [['id_user', 'id_lead'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user_lead' => 'Id User Lead',
            'id_user' => 'Id User',
            'id_lead' => 'Id Lead',
        ];
    }
}
