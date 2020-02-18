<?php

namespace app\models;
use yii\db\ActiveRecord;

class Country extends ActiveRecord{

        /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Country';
    }

    
}