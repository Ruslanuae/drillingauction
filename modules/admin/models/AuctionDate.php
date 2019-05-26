<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "auction_date".
 *
 * @property int $id
 * @property string $auc_date
 * @property string $location
 */
class AuctionDate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auction_date';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['auc_date', 'location'], 'required'],
            ['auc_date', 'date', 'format' => 'php: Y-m-d H:i:s'],
            [['auc_date'], 'safe'],
            [['location'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'auc_date' => 'Дата аукциона',
            'location' => 'Местоположение',
        ];
    }
}
