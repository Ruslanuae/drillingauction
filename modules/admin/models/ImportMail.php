<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "import_mail".
 *
 * @property int $id
 * @property string $email
 * @property string $subscribe
 */
class ImportMail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $import_file;

    public static function tableName()
    {
        return 'import_mail';
    }

    /**
     * {@inheritdoc}
     * [['user_name', 'user_surname', 'email', 'password', 'phone', 'country', 'region', 'city'], 'required'],
    ['user_name', 'string', 'min'=>3],
    ['user_surname', 'string', 'min'=>3],
    ['email', 'email'],
    ['email', 'unique', 'targetClass'=>'app\models\User'],
    ['phone', 'unique', 'targetClass'=>'app\models\User'],
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            ['email', 'email'],
            [['subscribe'], 'safe'],
            ['email', 'unique', 'targetClass'=>'app\models\User'],
            [['email'], 'string', 'max' => 255],
            [['import_file'], 'file', 'extensions' => 'csv'],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email пользователя',
            'subscribe' => 'Подписка',
            'import_file' => 'Импорт файла CSV',

        ];
    }
    public function UploadedFile()
    {
        if($this->validate())
        {
            $path = 'upload/store/' . $this->import_file->baseName . '.' . $this->import_file->extension;
            $this->import_file->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }
        else{
            return false;
        }
    }
    

    
}
