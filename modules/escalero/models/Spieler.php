<?php

namespace app\modules\escalero\models;

use Yii;

/**
 * This is the model class for table "spieler".
 *
 * @property integer $spielerID
 * @property string $spielerSpitzname
 * @property integer $spielerAngemeldet
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
            [['spielerAngemeldet'], 'integer'],
            [['spielerSpitzname'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'spielerID' => 'Spieler ID',
            'spielerSpitzname' => 'Spieler Spitzname',
            'spielerAngemeldet' => 'Spieler Angemeldet',
        ];
    }
}
