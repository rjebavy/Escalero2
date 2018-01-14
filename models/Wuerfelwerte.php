<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
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
            [[wuerfelwert], 'required'],
            [[wuerfelwert], 'integer'],
            [[wuerfelbild], 'string', 'max' => 2],
            [['bedeutunge'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wuerfelwert' => 'Würfelwert',
            'wuerfelbild' => 'Würfelbild',
            'bedeutung' => 'Bedeutungn',
        ];
    }
}
