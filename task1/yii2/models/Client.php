<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Модель клиента.
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 */
class Client extends ActiveRecord
{
    /*
        Записи в таблице Client

        [1, 'John Doe', '+78005551234'],
        [2, 'Benjamin Read', '+78005559876'],
        [3, 'Stanley Parry', '+78005554321'],
        [4, 'Mason Burns', null],
        [5, 'Rory Russell', '+78005554567'],
        [6, 'Kian Powell', null],
        [7, 'Darian Reynolds', '+78005551111'],
        [8, 'Kamari Hood', '+78005552222'],
        [12, 'Leonel Berger', '+78005553333'],
        [13, 'Stefan Landry', '+78005554444'],
        [14, 'Diego Bray', '+78005552223']
    */

    public static function tableName()
    {
        return '{{%client}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'phone' => 'Номер телефона',
        ];
    }
}