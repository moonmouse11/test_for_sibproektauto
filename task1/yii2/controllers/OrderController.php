<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Order;
use yii\db\Query;

class OrderController extends Controller
{
    public function actionIndex()
    {
        $query = new \yii\db\Query; 
        $query -> select('*')
            -> from ('Order')
            -> where(['between', 'date', '2021-10-01', '2021-10-31'])
            -> orderBy(['date' => SORT_ASC])
            -> leftJoin('Client', 'Order.client_id = Client.id')
            -> leftJoin('Order_work', 'Order.id = Order_work.order_id')
            -> leftJoin('Work', 'Order_work.work_id = Work.id');

        $command = $query -> createCommand();
        $orders = $command -> queryAll();

        // --------------------------
        return $this->render('index', [
            'orders' => $orders
        ]);
    }
}