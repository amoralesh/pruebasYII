<?php

namespace app\models;
use yii\db\ActiveRecord;

class CatConcesionario extends ActiveRecord{
        /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_cat_concesionarios';
    }
    public function actionSomething($concesionario)
{
 $model = CatConcesionario::find()->where(['nombre_concesionario' => $concesionario])->one();

 return $model;
}

    
}