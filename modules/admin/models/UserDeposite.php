<?php

namespace app\modules\admin\models;

use app\models\User;
use Yii;

/**
 * This is the model class for table "user_deposite".
 *
 * @property int $id
 * @property int $user_id
 * @property int $deposit
 */
class UserDeposite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_deposite';
    }
    public function getUsers()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'deposit'], 'required'],
            [['user_id', 'deposit'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Пользователь',
            'deposit' => 'Депозит',
        ];
    }
}
