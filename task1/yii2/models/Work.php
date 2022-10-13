<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Модель работ.
 *
 * @property integer $id
 * @property string $name
 * @property float $price
 */
class Work extends ActiveRecord
{
    /*
        Записи в таблице Work

        [1, 'Grooming', 500],
        [2, 'Nail clipping', 40],
        [3, 'Beak cleaning', 300],
        [4, 'Shots', 1500],
        [5, 'Ear drops', 460]
    */

    public static function tableName()
    {
        return '{{%work}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название работы',
            'price' => 'Стоимость',
        ];
    }
}