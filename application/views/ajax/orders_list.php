<table class="table table-striped table-advance table-hover">
    <tbody>
    <tr>
        <th>Клиент</th>
        <th>Дата доставки</th>
        <th>Статус заказа</th>
        <th>Тариф</th>
        <th>Оплата доставки</th>
        <th><i class="icon_cogs"></i>Действия</th>
    </tr>
    <? foreach($listOrders as $listOrder) { ?>
    <tr>
        <td><?=$listOrder['client']?></td>
        <td><?=$listOrder['date']?></td>
        <td><?=$listOrder['order_state']?></td>
        <td><?=$listOrder['tariff']?></td>
        <td><?=$listOrder['payment']?></td>
        <td>
            <div class="btn-group">
                <a class="btn btn-success editOrder" data-id="<?=$listOrder['id']?>" data-toggle="modal" data-target="#myModalEditOrder"  href="#"><i class="icon_cog"></i></a>
                <a class="btn btn-danger deleteOrder" data-id="<?=$listOrder['id']?>" href="#"><i class="icon_trash_alt"></i></a>
                <a class="btn btn-danger showOrder" data-id="<?=$listOrder['id']?>" href="/user/order_view/<?=$listOrder['id']?>"><i class="glyphicon glyphicon-eye-open"></i></a>
            </div>
        </td>
    </tr>
    <? } ?>
    </tbody>
</table>
