<?php 
    namespace app\models;
    use yii\db\ActiveRecord;
    use app\models\Country;

    // $countries = Country::find()->orderBy('name')->all();

    // $country = Country::findOne('US');

    // echo $country->name;

    // $country->name = 'U.S.A.';
    // $country->save();

    class Country extends ActiveRecord
    {
        
    }
?>