<?php

namespace app\modules\escalero\models;

use Yii;

/**
 * This is the model class for table "wuerfeltableau".
 *
 * @property integer $wuerfel
 * @property integer $wert
 * @property string $bild
 * @property integer $halten
 */
class Wuerfeltableau extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wuerfeltableau';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wert', 'halten'], 'integer'],
            [['bild'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wuerfel' => 'Wuerfel',
            'wert' => 'Wert',
            'bild' => 'Bild',
            'halten' => 'Halten',
        ];
    }
}
