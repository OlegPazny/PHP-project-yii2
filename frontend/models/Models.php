<?php

namespace app\models;
// namespace frontend\models;

use Yii;

/**
 * This is the model class for table "MODELS".
 *
 * @property int $id
 * @property int $ID_Brand
 * @property string $Model
 *
 * @property BRANDS $brand
 * @property POST[] $pOSTs
 */
class MODELS extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'MODELS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_Brand', 'Model'], 'required'],
            [['ID_Brand'], 'integer'],
            [['Model'], 'string', 'max' => 255],
            [['ID_Brand'], 'exist', 'skipOnError' => true, 'targetClass' => BRANDS::class, 'targetAttribute' => ['ID_Brand' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ID_Brand' => 'Id Brand',
            'Model' => 'Model',
        ];
    }

    /**
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(BRANDS::class, ['id' => 'ID_Brand']);
    }

    /**
     * Gets query for [[POSTs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPOSTs()
    {
        return $this->hasMany(POST::class, ['ID_Model' => 'id']);
    }
    // public function getPosts(){
    //     return $this->hasMany(Posts::class, ['id_model'=>'id']);
    // }
}
