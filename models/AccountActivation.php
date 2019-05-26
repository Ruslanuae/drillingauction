<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.08.2015
 * Time: 11:49
 */

namespace app\models;

use yii\base\InvalidParamException;
use yii\base\Model;
use app\models\User;
use Yii;

/* @property string $user_name */
class AccountActivation extends Model
{
    /* @var $user \app\models\User */
    private $_user;

    public function __construct($key, $config = [])
    {
        if (empty($key) || !is_string($key))
            throw new InvalidParamException('The key can not be empty!');
        $this->_user = User::findBySecretKey($key);
        if (!$this->_user)
            throw new InvalidParamException('Wrong key!');
        parent::__construct($config);
    }

    public function activateAccount()
    {
        $user = $this->_user;
        $user->status = User::STATUS_ACTIVE;
        $user->removeSecretKey();
        return $user->save();
    }

    public function getUsername()
    {
        $user = $this->_user;
        return $user->user_name;
    }
}