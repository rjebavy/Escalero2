<?php

namespace app\modules\escalero\models;

use Yii;

/**
 * This is the model class for table "wuerfelwerte".
 *
 * @property integer $wuerfelwert
 * @property string $wuerfelbild
 * @property string $bedeutung
 */
class Wuerfelwerte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wuerfelwerte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wuerfelbild'], 'string', 'max' => 2],
            [['bedeutung'], 'string', 'max' => 10],
            [['wuerfelbild'], 'unique'],
            [['bedeutung'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wuerfelwert' => 'Wuerfelwert',
            'wuerfelbild' => 'Wuerfelbild',
            'bedeutung' => 'Bedeutung',
        ];
    }
}
