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
    public $spitzname;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // Spitzname required
            [['spitzname'], 'required'],
        ];
    }

     /**
     * Logs in a user using the provided Spitzname.
     * @return bool whether the user is logged in successfully
     */
    public function anmelden()
    {
		// echo "bin in AnmeldenForm, function anmelden"; 
        if ($this->validate()) {
			echo "bin in AnmeldenForm, function anmelden, nach validate"; 
            return Spieler::logonBySpitzname($this->getSpieler());
        }
        return false;
    }

    /**
     * Finds Spieler by [[spitzname]]
     *
     * @return User|null
     */
    public function getSpieler()
    {
        if ($this->_user === false) {
            $this->_user = Spieler::findBySpitzname($this->spitzname);
        }

        return $this->_user;
    }
}
