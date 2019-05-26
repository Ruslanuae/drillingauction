<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "victory_user".
 *
 * @property int $id
 * @property int $num_lot
 * @property int $buyer
 * @property int $bid_buyer
 * @property string $bid_type
 * @property string $bid_date
 */
class VictoryUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'victory_user';
    }
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'buyer']);
    }
    public function getProducts()
    {
        return $this->hasOne(Products::className(), ['id' => 'num_lot']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_lot', 'bid_type'], 'required'],
            [['num_lot', 'buyer', 'bid_buyer'], 'integer'],
            [['bid_type'], 'string'],
            [['bid_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num_lot' => 'Товар',
            'buyer' => 'Покупатель',
            'bid_buyer' => 'Ставка',
            'bid_type' => 'Тип ставки',
            'bid_date' => 'Дата ставка',
        ];
    }
}
