<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Students".
 *
 * @property int|null $Id
 * @property string|null $LastName
 * @property string|null $FirstName
 * @property string|null $Address
 * @property string|null $City
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id'], 'integer'],
            [['LastName', 'FirstName', 'Address', 'City'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'LastName' => 'Last Name',
            'FirstName' => 'First Name',
            'Address' => 'Address',
            'City' => 'City',
        ];
    }
}
