<?php

namespace app\models;
use yii\db\ActiveRecord;
    use app\models\Brands;
    use app\models\Models;
    use app\models\Colors;
    use app\models\Bodies;
    use app\models\Engines;
    use app\models\Gearboxes;
    use app\models\Users;

use Yii;

/**
 * This is the model class for table "Post".
 *
 * @property int $id
 * @property int $ID_User
 * @property int $ID_Brand
 * @property int $ID_Model
 * @property int $ID_Engine
 * @property int $ID_Body
 * @property int $ID_Gearbox
 * @property int $ID_Color
 * @property string $Photo
 * @property string $City
 * @property int $Year
 * @property int $Price
 * @property int $Run
 * @property string $Date
 * @property string $Description
 *
 * @property BODIES $body
 * @property COLORS $color
 * @property ENGINES $engine
 * @property GEARBOXES $gearbox
 * @property MODELS $model
 * @property USERS $user
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID_User', 'ID_Brand', 'ID_Model', 'ID_Engine', 'ID_Body', 'ID_Gearbox', 'ID_Color', 'Photo', 'City', 'Year', 'Price', 'Run', 'Description'], 'required'],
            [['ID_User', 'ID_Brand', 'ID_Model', 'ID_Engine', 'ID_Body', 'ID_Gearbox', 'ID_Color', 'Year', 'Price', 'Run'], 'integer'],
            [['Date'], 'safe'],
            [['Description'], 'string'],
            [['Photo', 'City'], 'string', 'max' => 255],
            [['ID_Color'], 'exist', 'skipOnError' => true, 'targetClass' => COLORS::class, 'targetAttribute' => ['ID_Color' => 'id']],
            [['ID_Engine'], 'exist', 'skipOnError' => true, 'targetClass' => ENGINES::class, 'targetAttribute' => ['ID_Engine' => 'id']],
            [['ID_Gearbox'], 'exist', 'skipOnError' => true, 'targetClass' => GEARBOXES::class, 'targetAttribute' => ['ID_Gearbox' => 'id']],
            [['ID_User'], 'exist', 'skipOnError' => true, 'targetClass' => USERS::class, 'targetAttribute' => ['ID_User' => 'id']],
            [['ID_Model'], 'exist', 'skipOnError' => true, 'targetClass' => MODELS::class, 'targetAttribute' => ['ID_Model' => 'id']],
            [['ID_Body'], 'exist', 'skipOnError' => true, 'targetClass' => BODIES::class, 'targetAttribute' => ['ID_Body' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ID_User' => 'Id User',
            'ID_Brand' => 'Id Brand',
            'ID_Model' => 'Id Model',
            'ID_Engine' => 'Id Engine',
            'ID_Body' => 'Id Body',
            'ID_Gearbox' => 'Id Gearbox',
            'ID_Color' => 'Id Color',
            'Photo' => 'Photo',
            'City' => 'City',
            'Year' => 'Year',
            'Price' => 'Price',
            'Run' => 'Run',
            'Date' => 'Date',
            'Description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Body]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBody()
    {
        return $this->hasOne(BODIES::class, ['id' => 'ID_Body']);
    }

    /**
     * Gets query for [[Color]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(COLORS::class, ['id' => 'ID_Color']);
    }

    /**
     * Gets query for [[Engine]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEngine()
    {
        return $this->hasOne(ENGINES::class, ['id' => 'ID_Engine']);
    }

    /**
     * Gets query for [[Gearbox]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGearbox()
    {
        return $this->hasOne(GEARBOXES::class, ['id' => 'ID_Gearbox']);
    }

    /**
     * Gets query for [[Model]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModel()
    {
        return $this->hasOne(MODELS::class, ['id' => 'ID_Model']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(USERS::class, ['id' => 'ID_User']);
    }





    public function getBrands(){
        return $this->hasOne(Brands::class, ['id'=>'ID_Brand']);
    }
    public function getModels(){
        return $this->hasOne(Models::class, ['id'=>'ID_Model']);
    }
    public function getColors(){
        return $this->hasOne(Colors::class, ['id'=>'ID_Color']);
    }
    public function getBodies(){
        return $this->hasOne(Bodies::class, ['id'=>'ID_Body']);
    }
    public function getEngines(){
        return $this->hasOne(Engines::class, ['id'=>'ID_Engine']);
    }
    public function getGearboxes(){
        return $this->hasOne(Gearboxes::class, ['id'=>'ID_Gearbox']);
    }
    public function getUsers(){
        return $this->hasOne(Users::class, ['id'=>'ID_User']);
    }
}
