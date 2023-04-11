<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "leads".
 *
 * @property int $id_lead
 * @property string $id_stripe
 * @property string $first_name
 * @property string $last_name
 * @property string $company
 * @property string $email
 * @property string $img
 * @property string $street
 * @property int $id_state
 * @property string $city
 * @property int $id_country
 * @property string $postal_code
 * @property string $title
 * @property string $phone
 * @property string $cell_phone
 * @property int $id_source
 * @property int $id_sector
 * @property int $id_project
 * @property string $income
 * @property string $fax
 * @property string $website
 * @property int $id_state_client
 * @property string $quantity_worker
 * @property int $id_qualification
 * @property string $id_skype
 * @property string $id_twitter
 * @property string $description
 */
class Lead extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leads';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_stripe', 'first_name', 'last_name', 'company', 'email', 'img', 'street', 'id_state', 'city', 'id_country', 'postal_code', 'title', 'phone', 'cell_phone', 'id_source', 'id_sector', 'id_project', 'income', 'fax', 'website', 'id_state_client', 'quantity_worker', 'id_qualification', 'id_skype', 'id_twitter', 'description'], 'required'],
            [['id_state', 'id_country', 'id_source', 'id_sector', 'id_project', 'id_state_client', 'id_qualification'], 'integer'],
            [['id_stripe'], 'string', 'max' => 100],
            [['first_name', 'last_name', 'company', 'email', 'img', 'street', 'city', 'postal_code', 'title', 'phone', 'cell_phone', 'income', 'fax', 'website', 'quantity_worker'], 'string', 'max' => 50],
            [['id_skype', 'id_twitter'], 'string', 'max' => 11],
            [['description'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_lead' => 'Id Lead',
            'id_stripe' => 'Id Stripe',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'company' => 'Company',
            'email' => 'Email',
            'img' => 'Img',
            'street' => 'Street',
            'id_state' => 'Id State',
            'city' => 'City',
            'id_country' => 'Id Country',
            'postal_code' => 'Postal Code',
            'title' => 'Title',
            'phone' => 'Phone',
            'cell_phone' => 'Cell Phone',
            'id_source' => 'Id Source',
            'id_sector' => 'Id Sector',
            'id_project' => 'Id Project',
            'income' => 'Income',
            'fax' => 'Fax',
            'website' => 'Website',
            'id_state_client' => 'Id State Client',
            'quantity_worker' => 'Quantity Worker',
            'id_qualification' => 'Id Qualification',
            'id_skype' => 'Id Skype',
            'id_twitter' => 'Id Twitter',
            'description' => 'Description',
        ];
    }
}
