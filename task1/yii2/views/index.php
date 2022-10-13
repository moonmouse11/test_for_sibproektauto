<?php 

$this->title = 'Заказы';
?>

<div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID заказа</th>
                <th>ФИО клиента</th>
                <th>Телефон клиента</th>
                <th>Имя питомца</th>
                <th>Работы</th>
            </tr>
        </thead>
        <tbody>
        <? foreach ($orders as $order): ?>
            <tr>
                <th><?=$order['id']?></th>
                <th><?=$order['Client.name']?></th>
                <th><?=$order['Client.phone']?></th>
                <th><?=$order['name']?></th>
                <th>Работы</th>
                <? foreach ($order['work'] as $work): ?>
                    <th><?=$work['name']?></th>
                    <th><?=$work['proce']?></th>
                <? endforeach; ?>
            </tr>
        <? endforeach;?>
        </tbody>
    </table>
</div>
