<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Usuario".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $apellidos
 * @property int $edad
 * @property string $telefono
 * @property string|null $correo
 * @property string $fechaAlta
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'edad', 'telefono', 'fechaAlta'], 'required'],
            [['edad'], 'integer'],
            [['fechaAlta'], 'safe'],
            [['nombre', 'apellidos', 'telefono', 'correo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'edad' => 'Edad',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
            'fechaAlta' => 'Fecha Alta',
        ];
    }
}
