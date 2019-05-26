<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\User;
use Yii;


/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $User = User::findOne(Yii::$app->user->id);

        if (in_array($User->email, Yii::$app->params['admins'])) {
            return $this->render('index', compact($User));
        } else {
            return $this->redirect('/');
        }
    }
}
