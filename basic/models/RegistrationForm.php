<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * Class RegistrationForm
 * @package app\models
 */
class RegistrationForm extends ActiveRecord
{

    /**
     * @return string
     */
    public static function tableName(){
        return 'users';
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'phone', 'address', 'comment'], 'required'],
            [['phone'], 'string'],
            ['phone', 'match', 'pattern' => '/^(38)(\d{3})(\d{3})(\d{2})(\d{2})/',
                'message' => 'Телефон должен быть в формате 38(XXX)XXX-XX-XX'],
            [['firstname','lastname', 'address', 'comment'], 'string'],
        ];
    }

}
