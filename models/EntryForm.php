<?php
namespace app\models;
use yii\base\Model;
class EntryForm extends Model
{
    public $name;
    public $apellidoP;
    public $apellidoM;
    public $edad;
    public $email;
    
         public function rules()
       {
            return [
            [['name','apellidoP','apellidoM','edad', 'email'], 'required'],
            ['email', 'email'],
            ['edad','integer'],
            ];
       }
}