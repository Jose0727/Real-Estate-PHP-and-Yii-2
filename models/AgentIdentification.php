<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agent_identification".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $primary_identification_type
 * @property string $primary_date_issued
 * @property string $primary_date_expiry
 * @property string $primary_serial_number
 * @property string $primary_body_location
 * @property string $secondary_identification_type
 * @property string $secondary_date_issued
 * @property string $secondary_date_expiry
 * @property string $secondary_serial_number
 * @property string $secondary_body_location
 * @property string $type
 * @property string $date_issued
 * @property string $date_of_birth
 * @property string $serial_number
 * @property string $body_location
 * @property string $witness_name
 * @property string $mother_firstname
 * @property string $mother_middlename
 * @property string $mother_lastname
 * @property string $mother_maidenname
 * @property string $mother_date_of_birth
 * @property string $mother_wetness_name
 * @property string $father_firstname
 * @property string $father_middlename
 * @property string $father_lastname
 * @property string $father_maidenname
 * @property string $father_date_of_birth
 * @property string $father_wetness_name
 * @property string $address_identification_type
 * @property string $address_date_issued
 * @property string $address_serial_number
 * @property string $address_issuing_body_name
 * @property string $address_street_address
 * @property string $address_phone_number
 * @property integer $status
 * @property string $created
 * @property string $updated
 *
 * @property User $user
 */
class AgentIdentification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agent_identification';
    }

    /**
     * @inheritdoc
     */
    public $aggrement;
    public function rules()
    {
        return [
            [['primary_identification_type','primary_date_issued','primary_date_expiry','primary_serial_number','primary_body_location', 'secondary_identification_type', 'secondary_date_issued', 'secondary_date_expiry', 'secondary_serial_number', 'secondary_body_location','address_date_issued', 'address_serial_number', 'address_issuing_body_name', 'address_street_address', 'address_phone_number','address_identification_type','first_name_agent','last_name_agent','email_agent','decleration'], 'required'],
            ['aggrement', 'required','requiredValue' => 1, 'message' => 'click accept terms and conditions'],
            [['user_id', 'status'], 'integer'],
            [['primary_identification_type', 'secondary_identification_type', 'type', 'address_identification_type'], 'string'],
            [['primary_date_issued', 'primary_date_expiry', 'secondary_date_issued', 'secondary_date_expiry', 'date_issued', 'date_of_birth', 'mother_date_of_birth', 'father_date_of_birth', 'address_date_issued', 'created', 'updated','primary_identification_other','secondary_identification_other','first_name_agent','last_name_agent','email_agent','decleration'], 'safe'],
            [['primary_serial_number', 'primary_body_location', 'secondary_serial_number', 'secondary_body_location', 'serial_number', 'body_location', 'witness_name', 'mother_firstname', 'mother_middlename', 'mother_lastname', 'mother_maidenname', 'mother_wetness_name', 'father_firstname', 'father_middlename', 'father_lastname', 'father_maidenname', 'father_wetness_name', 'address_serial_number', 'address_issuing_body_name', 'address_street_address', 'address_phone_number'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            
            [['mother_firstname', 'mother_middlename', 'mother_lastname', 'father_firstname', 'father_middlename', 'father_lastname'], 'required','when' => function ($model) {

                    return $model->secondary_identification_type == "Birth Certificate";
                }, 'whenClient' => "function (attribute, value) {

                return $(\"#agentidentification-secondary_identification_type\").val() == 'Birth Certificate';

            }"],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'primary_identification_type' => 'Identification Type',
            'primary_date_issued' => 'Date Issued',
            'primary_date_expiry' => 'Date Expiry',
            'primary_serial_number' => 'Serial Number',
            'primary_body_location' => 'Issing Government Department',
            'secondary_identification_type' => 'Identification Type',
            'secondary_date_issued' => 'Date Issued',
            'secondary_date_expiry' => 'Date Expiry',
            'secondary_serial_number' => 'Serial Number',
            'secondary_body_location' => 'Issing Government Department',
            'type' => 'Type',
            'date_issued' => 'Date Issued',
            'date_of_birth' => 'Date Of Birth',
            'serial_number' => 'Serial Number',
            'body_location' => 'Issing Government Department',
            'witness_name' => 'Witness Name',
            'mother_firstname' => 'Firstname',
            'mother_middlename' => 'Middlename',
            'mother_lastname' => 'Lastname',
            'mother_maidenname' => 'Miscellaneous',
            'mother_date_of_birth' => 'Date Of Birth',
            'mother_wetness_name' => 'Wetness Name',
            'father_firstname' => 'Firstname',
            'father_middlename' => 'Middlename',
            'father_lastname' => 'Lastname',
            'father_maidenname' => 'Miscellaneous',
            'father_date_of_birth' => 'Date Of Birth',
            'father_wetness_name' => 'Wetness Name',
            'address_identification_type' => 'Identification Type',
            'address_date_issued' => 'Date Issued',
            'address_serial_number' => 'Serial Number',
            'address_issuing_body_name' => 'Issuing Body Name',
            'address_street_address' => 'Street Address',
            'address_phone_number' => 'Phone Number',
            'status' => 'Status',
            'created' => 'Created',
            'updated' => 'Updated',
            'primary_identification_other'=>'Other Identification Type',
            'secondary_identification_other'=>'Other Identification Type',
            'first_name_agent'=>'First name',
            'last_name_agent'=>'Last name',
            'email_agent'=>'Email',
            'decleration'=>'Affirmation',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
