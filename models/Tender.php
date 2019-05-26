<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tender".
 *
 * @property int $id
 * @property int $tender_type_id
 * @property string $name_of_equipment_description
 * @property string $desc_prv_text
 * @property string $rental_period
 * @property string $starting_from_date
 * @property string $end_destination
 * @property string $requested_standard
 * @property string $other_information
 * @property string $requested_documents
 * @property string $send_request
 * @property string $looking_to_buy_before
 * @property string $need_to_be_ready_before
 * @property string $location_of_equipment
 * @property string $type_of_certification
 */
class Tender extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tender';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tender_type_id', 'name_of_equipment_description', 'desc_prv_text'], 'required'],
            [['tender_type_id'], 'integer'],
            [['name_of_equipment_description', 'desc_prv_text', 'other_information'], 'string'],
            [['rental_period', 'starting_from_date', 'end_destination', 'requested_standard', 'requested_documents', 'send_request', 'looking_to_buy_before', 'need_to_be_ready_before', 'location_of_equipment', 'type_of_certification'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tender_type_id' => 'Tender Type ID',
            'name_of_equipment_description' => 'Name Of Equipment Description',
            'desc_prv_text' => 'Desc Prv Text',
            'rental_period' => 'Rental Period',
            'starting_from_date' => 'Starting From Date',
            'end_destination' => 'End Destination',
            'requested_standard' => 'Requested Standard',
            'other_information' => 'Other Information',
            'requested_documents' => 'Requested Documents',
            'send_request' => 'Send Request',
            'looking_to_buy_before' => 'Looking To Buy Before',
            'need_to_be_ready_before' => 'Need To Be Ready Before',
            'location_of_equipment' => 'Location Of Equipment',
            'type_of_certification' => 'Type Of Certification',
        ];
    }

    public function getTenderTypes()
    {
        return $this->hasOne(TenderTypes::className(), ['id' => 'tender_type_id']);
    }

    /**
     * {@inheritdoc}
     * @return TenderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TenderQuery(get_called_class());
    }
}
