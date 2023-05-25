<?php

namespace app\models;
// 

use Yii;

/**
 * This is the model class for table "BRANDS".
 *
 * @property int $id
 * @property string $Brand
 * @property string $Label
 *
 * @property MODELS[] $mODELSs
 */
class BRANDS extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'BRANDS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Brand', 'Label'], 'required'],
            [['Brand', 'Label'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Brand' => 'Brand',
            'Label' => 'Label',
        ];
    }

    /**
     * Gets query for [[MODELSs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMODELSs()
    {
        return $this->hasMany(MODELS::class, ['ID_Brand' => 'id']);
    }

    public function getPosts(){
        return $this->hasMany(Posts::class, ['id_brand'=>'id']);
    }
}
