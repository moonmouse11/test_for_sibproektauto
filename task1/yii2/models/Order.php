<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use app\models\Client;
use app\models\Work;

/**
 * Модель заказа.
 *
 * @property integer $id
 * @property string $name
 * @property integer $client_id
 * @property string $date 
 * 
 * @property Work[] $works
 */
class Order extends ActiveRecord
{
    /*
        Записи в таблице Order

        [1, 'Max', 2, '2021-09-31 12:56:00'],
        [2, 'Bobby', 1, '2021-10-05 08:12:33'],
        [3, 'Woofer', 3, '2021-10-05 04:09:21'],
        [4, 'Birdo', 6, '2021-10-01 14:42:01'],
        [5, 'Purrenator', 13, '2021-10-30 16:31:31']
    */
    
    public static function tableName()
    {
        return '{{%order}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя питомца',
            'client_id' => 'Клиент',
        ];
    }

    /**
     * Возвращает модель клиента
     */
    public function getClient()
    {
        return $this->hasOne(Client::class, ['client_id' => 'id']);
    }

    /**
     * Возвращает список работ
     */
    public function getWorks()
    {
        return $this->hasMany(Work::class, ['id' => 'work_id'])
            ->viaTable('order_work', ['order_id' => 'id']);
    }
}