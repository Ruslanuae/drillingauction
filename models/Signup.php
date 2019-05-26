<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28.05.2018
 * Time: 15:34
 */

namespace app\models;
use yii\base\Model;
use Yii;
use yii\helpers\Url;
use app\models\UserDeposit;


//<p><strong>&nbsp;Как это будет работать?</strong></p>
//<p>&nbsp;&nbsp; - Пользователь проходит регистрацию, вводит данные в определенные поля</p>
//<p><strong>&nbsp;Поля регистрации:</strong></p>
//<p>&nbsp;&nbsp; - Имя</p>
//<p>&nbsp;&nbsp; - Фамилия</p>
//<p>&nbsp;&nbsp; - Почта</p>
//<p>&nbsp;&nbsp; - Пароль</p>
//<p>&nbsp;&nbsp; - Номер телефона</p>
//<p>&nbsp;&nbsp; - Адрес проживания</p>
//
//<p>&nbsp; После регистрации получает уведомление что он зарегистрирован и может выполнить вход в свой аккаунт</p>



class Signup extends Model
{
    public $user_name;
    public $user_surname;
    public $email;
    public $password;
    public $phone;
    public $country;
    public $region;
    public $city;
    public $status;
    
    public function rules()
    {
        return [
            [['user_name', 'user_surname', 'email', 'password', 'phone', 'country', 'region', 'city'], 'required'],
            ['user_name', 'string', 'min'=>3],
            ['user_surname', 'string', 'min'=>3],
            ['email', 'email'],
            ['email', 'unique', 'targetClass'=>'app\models\User'],
            ['phone', 'unique', 'targetClass'=>'app\models\User'],
            ['country', 'string'],
            ['password', 'string', 'min'=>2, 'max'=>20],
            ['status', 'default', 'value' => User::STATUS_ACTIVE, 'on' => 'default'],
            ['status', 'in', 'range' =>[
                User::STATUS_NOT_ACTIVE,
                User::STATUS_ACTIVE
            ]],
            ['status', 'default', 'value' => User::STATUS_NOT_ACTIVE, 'on' => 'emailActivation'],
        ];
    }

    public function signup()
    {
        $user = new User();
        $user->user_name= $this->user_name;
        $user->user_surname= $this->user_surname;
        $user->email= $this->email;
        $user->setPassword($this->password);
        $user->phone= $this->phone;
        $user->country= $this->country;
        $user->region= $this->region;
        $user->city= $this->city;
        $user->status = $this->status;
        $user->generateAuthKey();
        if($this->scenario === 'emailActivation')
            $user->generateSecretKey();
        if($user->save())
        {
            $deposit_user = new UserDeposit();
            $deposit_user->user_id = $user->id;
            $deposit_user->deposit = 0;
            $deposit_user->save();
            return $user;
        }
        else
            return null;

        //return $user->save()? $user : null; //вернет true если OK
    }
    public function sendActivationEmail($user)
    {
        $contacts = Contacts::find()->asArray()->one();
        $users = User::find()->asArray()->all();
        $domains = Yii::$app->params['domains'];
        return Yii::$app->mailer->compose('activationEmail', ['user' => $user, 'users' => $users, 'contacts' => $contacts, 'domains' => $domains])
            ->setFrom([Yii::$app->params['adminEmail'] => 'STIGL F.Z.E.'])
            ->setTo($user['email'])
            ->setHeader('List-Unsubscribe', Url::to([$domains.'/page/unsubscribe?mail='.$this->email], true))
            ->setHeader('List-id', 'STIGL')
            ->setSubject('Activate account for '.Yii::$app->name)
            ->send();
    }
}