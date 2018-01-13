<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Wuerfel is the model behind the wuerfeln form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class Wuerfel extends Model
{
    public $wuerfel = null; 
	public $bild = "XX"; 
	public $wert = null; 
	
    public $halten = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // wuerfel required
            [['wuerfel'], 'required'],
            // halten must be a boolean value
            ['halten', 'boolean'],
			// bild must be string, max 2 characters long
           [['bild'], 'string', 'max' => 2],
            // wert must be a boolean value		   
           [['wert'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wuerfel' => 'Wuerfel',
            'bild' => 'Bild',
            'wert' => 'Wert',
        ];
    }

    /**
     * ???
     */	
	public function zeigeBild(){
		return $this->bild;
	}
	
    /**
     * Berechnet Zufallszahl im Bereich 1 - 6 und setzt wert von wuerfel. 
	 * Ein Setter. 
     */	
	public function wuerfeln(){
		$zz = mt_rand() % 6 + 1;
		echo $zz; 
		$this->wert = $zz;
		
		return $this->wert ;
	}
	
	
	    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    	/* public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

	
	
*/

	
}
