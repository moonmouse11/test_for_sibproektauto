<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\Order;
use app\models\Work;

/**
 * Модель, связывающая заказы и работы.
 *
 * @property integer $order_id
 * @property integer $work_id
 */
class OrderWork extends ActiveRecord
{
    /*
        Записи в таблице Order_work

        [1, 1],
        [1, 2],
        [2, 5],
        [3, 1],
        [3, 4],
        [4, 3],
        [5, 2],
        [5, 1],
        [5, 4]
    */
    
    public static function tableName()
    {
        return '{{%order_work}}';
    }

    public function attributeLabels()
    {
        return [
            'order_id' => 'Заказ',
            'work_id' => 'Работа',
        ];
    }

    /**
     * Возвращает модель заказа
     */
    public function getOrder()
    {
        return $this->hasOne(Order::class, ['order_id' => 'id']);
    }

    /**
     * Возвращает модель Работы
     */
    public function getClient()
    {
        return $this->hasOne(Work::class, ['work_id' => 'id']);
    }
}