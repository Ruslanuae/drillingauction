<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05.08.2015
 * Time: 15:21
 */

namespace app\models;

use Yii;
use yii\base\Model;

class SendEmailForm extends Model
{
    public $email;

    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => User::className(),
                'filter' => [
                    //'status' => User::STATUS_ACTIVE
                ],
                'message' => 'This email is not registered!'
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'email' => 'E-mail'
        ];
    }

    public function sendEmail()
    {
        /* @var $user User */
        $user = User::findOne(
            [
                //'status' => User::STATUS_ACTIVE,
                'email' => $this->email
            ]
        );

        if($user):
            $user->generateSecretKey();
            $contacts = Contacts::find()->asArray()->one();
            $users = User::find()->asArray()->all();
            $domains = Yii::$app->params['domains'];
            if($user->save()):
                return Yii::$app->mailer->compose('resetPassword', ['user' => $user, 'users' => $users, 'contacts' => $contacts, 'domains' => $domains])
                    ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name.' (sent by robot)'])
                    ->setTo($this->email)
                    ->setSubject('Reset password for account '.Yii::$app->name)
                    ->send();
            endif;
        endif;

        return false;
    }

}