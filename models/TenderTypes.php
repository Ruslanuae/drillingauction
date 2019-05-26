<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tender_types".
 *
 * @property int $id
 * @property string $tender_type_name
 */
class TenderTypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tender_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tender_type_name'], 'required'],
            [['tender_type_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tender_type_name' => 'Tender Type Name',
        ];
    }

    public static function getAllTenderTypes()
    {
        return ArrayHelper::map(self::find()->all(), 'id', 'tender_type_name');
    }

    /**
     * {@inheritdoc}
     * @return TenderTypesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TenderTypesQuery(get_called_class());
    }
}
