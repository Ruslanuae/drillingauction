<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "sending_messages".
 *
 * @property int $id
 * @property string $heading
 * @property string $description
 */
class SendingMessages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sending_messages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['heading', 'description'], 'required'],
            [['description'], 'string'],
            [['heading'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'heading' => 'Заголовок',
            'description' => 'Информация сообщения',
        ];
    }
}
