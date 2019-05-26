<?php

namespace app\modules\admin\models;

use app\models\User;
use Yii;

/**
 * This is the model class for table "rate_history".
 *
 * @property int $id
 * @property int $num_lot номер лота
 * @property int $buyer id игрока
 * @property int $bid_buyer ставка игрока
 * @property string $bid_date время ставки
 */
class RateHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rate_history';
    }

    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'buyer']);
    }
    public function rules()
    {
        return [
            [['num_lot', 'bid_buyer', 'bid_date'], 'required'],
            [['num_lot', 'buyer', 'bid_buyer'], 'integer'],
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
            'num_lot' => 'Номер лота',
            'buyer' => 'Покупатель',
            'bid_buyer' => 'Ставка покупателя',
            'bid_date' => 'Дата ставки',
        ];
    }
}
