<?php

namespace app\modules\escalero\models;

use Yii;
use yii\base\Model;

/**
 * AnmeldenForm is the model behind the anmelden form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class AnmeldenForm extends Model
{
    public $username;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username required
            [['username'], 'required'],
        ];
    }

     /**
     * Logs in a user using the provided username.
     * @return bool whether the user is logged in successfully
     */
    public function anmelden()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser());
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
