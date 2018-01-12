<?php

namespace app\modules\escalero\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "spieler".
 *
 * @property integer $spielerID
 * @property string $spielerSpitzname
 * @property boolean $spielerAngemeldet
 */
class Spieler extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'spieler';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['spielerSpitzname'], 'required'],
            [['spielerAngemeldet'], 'boolean'],
             [['spielerSpitzname'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'spielerID' => 'ID',
            'spielerSpitzname' => 'Spitzname',
            'spielerAngemeldet' => 'angemeldet',
        ];
    }
	
	
    /**
     * Finds Spieler by Spitzname
     *
     * @param string $spitzname
     * @return true|false
     */
    public static function findBySpitzname($spitzname)
    {
        if (($spielerSpitzname = Spieler::findOne($spitzname)) !== null) {
            return true;
        } else {
            return false;
        }
    }

	
	
    /**
     * Logon existent Spieler by Spitzname
     *
     * @param string $spitzname
     * @return true|false
     */
    public static function logonBySpitzname($spitzname)
    {
        if (($spielerSpitzname = Spieler::findOne($spitzname)) !== null) {
			echo "logonBySpitzname, if clause true path ";
			$spieler = new Spieler;
			$spieler->spielerSpitzname = $spitzname;
			$spieler->spielerAngemeldet = true;
			$spieler->insert();
            return true;
        } else {
            return false;
        }
    }
	
	
}
