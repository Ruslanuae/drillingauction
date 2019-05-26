<?php
/* Класс используется для входа и регистрации (работает с пользователями и админами*/
namespace app\models;

use yii\behaviors\TimestampBehavior;
use \yii\db\ActiveRecord;
use \yii\web\IdentityInterface;
use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $user_name
 * @property string $user_surname
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $auth_key
 */

class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_NOT_ACTIVE = 1;
    const STATUS_ACTIVE = 10;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_name', 'user_surname', 'email', 'phone', 'country', 'region', 'city'], 'required'],
            [['user_name', 'user_surname', 'email', 'phone'], 'string', 'max' => 100],
            [['status', 'subscribe'], 'safe'],
            [['password', 'country', 'region', 'city', 'auth_key'], 'string', 'max' => 255],
            ['secret_key', 'unique']
        ];
    }
    public function getCountries()
    {
        return $this->hasOne(Countries::className(), ['id' => 'country']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => 'Имя',
            'user_surname' => 'Фамилия',
            'email' => 'E-mail',
            'password' => 'Пароль (зашифрован)',
            'phone' => 'Телефон',
            'country' => 'Страна',
            'region' => 'Регион',
            'city' => 'Город',
            'status' => 'Активирован или нет',
            'subscribe' => 'Подписка',
            'date_update' => 'Последняя дата редактирования данных аккаунта',
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className()
        ];
    }

    public static function findByphone($phone)
    {
        return static::findOne([
            'phone' => $phone
        ]);
    }

    public static function findByEmail($email)
    {
        return static::findOne([
            'email' => $email
        ]);
    }

    public static function findBySecretKey($key)
    {
        if (!static::isSecretKeyExpire($key))
        {
            return null;
        }
        return static::findOne([
            'secret_key' => $key,
        ]);
    }

    public function generateSecretKey()
    {
        $this->secret_key = Yii::$app->security->generateRandomString().'_'.time();
    }

    public function removeSecretKey()
    {
        $this->secret_key = null;
    }

    public static function isSecretKeyExpire($key)
    {
        if (empty($key))
        {
            return false;
        }
        $expire = Yii::$app->params['secretKeyExpire'];
        $parts = explode('_', $key);
        $timestamp = (int) end($parts);

        return $timestamp + $expire >= time();
    }

    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    public function generateAuthKey(){
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }


    public static function findIdentity($id)
    {
        return static::findOne([
            'id' => $id,
            'status' => self::STATUS_ACTIVE
        ]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    //Возврат пользователя по имени
    public static function findByUsername($user_name)
    {
        return static::findOne(['user_name' => $user_name]);
    }
}