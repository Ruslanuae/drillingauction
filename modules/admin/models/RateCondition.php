<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "rate_condition".
 *
 * @property int $id
 * @property string $name
 */
class RateCondition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rate_condition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название статуса',
        ];
    }
}
